<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function register()
    {
        return view('voyager::auth.register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'contact' => 'required',
            'dob' => 'required',
            'license_id_no' => 'required',
            'license_type' => 'required',
            'nationality' => 'required',
            'civil_status' => 'required',
            'permanent_address' => 'required',
            'present_address' => 'required',
        ]);
        // dd($data);
        if ($request->file('avatar')) {
            $avatar = 'users/' . time() . '.' . $data['avatar']->getClientOriginalExtension();
            // dd($data);
            $image = Image::make($data['avatar'])
                ->resize(200, 200, function (Constraint $constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            $image->encode($data['avatar']->getClientOriginalExtension(), 75);
            // // dd($image);
            Storage::disk(config('voyager.storage.disk'))->put($avatar, (string) $image, 'public');
        } else {
            $avatar = 'images/default.png';
        }

        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'avatar' => $avatar,
            'role_id' => '7',
            'settings' => '{"locale":"en"}',
        ];

        $user = User::create($userData);
        // dd($user->id);
        if ($user) {
            $driverData = [
                'contact' => $data['contact'],
                'dob' => $data['dob'],
                'license_id_no' => $data['license_id_no'],
                'license_type' => $data['license_type'],
                'nationality' => $data['nationality'],
                'civil_status' => $data['civil_status'],
                'permanent_address' => $data['permanent_address'],
                'present_address' => $data['present_address'],
                'user_id' => $user->id,
            ];
            //  dd($driverData);
            Driver::create($driverData);
            Auth::login($user);
            return redirect()->route('voyager.dashboard')->with(['message' => "Registration Succuessfull !", 'alert-type' => 'success']);
        }

    }
}
