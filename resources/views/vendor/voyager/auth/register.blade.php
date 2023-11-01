<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ setting('admin.title') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/iofrm_files/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/iofrm_files/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/iofrm_files/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/iofrm_files/iofrm-theme31.css') }}">
</head>

<body cz-shortcut-listen="true">
    <div class="form-body on-top-mobile">
        <div class="website-logo">
            <a href="https://brandio.io/envato/iofrm/html/index.html">
                <div class="logo">
                    <?php $admin_loader_img = Voyager::setting('admin.loader', ''); ?>
                    @if ($admin_loader_img == '')
                        <img src="{{ voyager_asset('images/logo-icon.png') }}" alt="Voyager Loader">
                    @else
                        <img src="{{ Voyager::image($admin_loader_img) }}" alt="Voyager Loader">
                    @endif
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div class="mb-5">

                        <h3 class="mb-4"> <?php $admin_loader_img = Voyager::setting('admin.loader', ''); ?>
                            @if ($admin_loader_img == '')
                                <img src="{{ voyager_asset('images/logo-icon.png') }}" alt="Voyager Loader">
                            @else
                                <img src="{{ Voyager::image($admin_loader_img) }}" alt="Voyager Loader">
                            @endif
                        </h3>

                        <div class="type-animation">
                            <h2 class="mb-2 animated">{{ setting('admin.title') }}</h2>
                        </div>
                    </div>
                    <div>
                        <p>Fill the form, <br>To register as driver.</p>
                    </div>
                </div>
                <div class="bottom-view">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Driver Ragistration</h3>

                        <form class="container-custom-padding" action="{{ route('driver.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">User name</label>
                                    <input type="text" class="form-control" required name="name"
                                        placeholder="User Name">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">E-Mail Address</label>
                                    <input type="email" class="form-control" required name="email"
                                        placeholder="email@email.com">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" required name="password"
                                        placeholder=" Enter Password">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Avatar</label>
                                    <input type="file" class="form-control" name="avatar">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12 col-sm-6">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" required name="contact"
                                        placeholder="Phone Number">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Date of Birth</label>
                                    <input type="date" class="form-control" required name="dob">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" required name="license_id_no"
                                        placeholder="lisence no">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select name="license_type" class="form-control" required>
                                        <option>--select License Type--</option>
                                        <option value="0">Student</option>
                                        <option value="1">Professional</option>
                                        <option value="2">Student</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <select name="civil_status" class="form-control" required>
                                        <option>--select Civil Status--</option>
                                        <option value="0">Married</option>
                                        <option value="1">Unmarried</option>
                                    </select>

                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" required name="nationality"
                                        placeholder="Nationality">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <textarea class="form-control" required name="present_address" placeholder="Present Address"></textarea>
                                </div>
                                <div class="col-6">
                                    <textarea class="form-control" required name="permanent_address" placeholder="permanent Address"></textarea>
                                </div>
                            </div>
                            <div class="row top-padding">

                                <div class="col-12 col-sm-12">
                                    <div class="form-button text-center">
                                        <button id="submit" type="submit" class="ibtn less-padding">Submit
                                            Application</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./iofrm_files/jquery.min.js.download"></script>
    <script src="./iofrm_files/popper.min.js.download"></script>
    <script src="./iofrm_files/bootstrap.min.js.download"></script>
    <script src="./iofrm_files/main.js.download"></script>





</body>

</html>
