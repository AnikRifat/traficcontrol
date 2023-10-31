<?php

namespace App\Http\Controllers;

use App\Offence;



class ReportController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Get the currently authenticated user

        if ($user->role_id == 6) {
            // User has role_id 6, so retrieve offenses with driver_id = user->id
            $reports = Offence::where('officer_id', $user->id)->get();
        } elseif ($user->role_id == 7) {
            // User has role_id 7, so retrieve offenses with officer_id = user->id
            $reports = Offence::where('driver_id', $user->id)->get();
        } else {
            // Handle other role_ids or conditions if needed
            $reports = Offence::all(); // Default behavior for other roles
        }
        // dd($reports);
        return view('voyager::reports.index', compact('reports'));
    }





}
