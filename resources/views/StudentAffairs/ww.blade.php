<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>i Track</title>
    <base href="{{ \URL::to('/') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/t.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="indexx.html"><img src="images/track (1).svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="indexx.html"><img src="images/logo.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">

                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>


        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <nav class="sidebar sidebar-offcanvas" id="sidebar">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="n.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false"
                            aria-controls="primary">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">primary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="primary">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="levels.html">1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">2</a></li>
                                <li class="nav-item"> <a class="nav-link">3</a></li>
                                <li class="nav-item"> <a class="nav-link">4</a></li>
                                <li class="nav-item"> <a class="nav-link">5</a></li>
                                <li class="nav-item"> <a class="nav-link">6</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false"
                            aria-controls="middle">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="middle">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="levels.html">7</a></li>
                                <li class="nav-item"><a class="nav-link">8</a></li>
                                <li class="nav-item"><a class="nav-link">9</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false"
                            aria-controls="secondary">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link">10</a></li>
                                <li class="nav-item"> <a class="nav-link">11</a></li>
                                <li class="nav-item"> <a class="nav-link">12</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="add-student.html">
                            <i class="icon-plus menu-icon"></i>
                            <span class="menu-title">Add Student</span>
                        </a>
                    </li>


                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card"> {{-- color --}}
                                <div class="card-body">
                                    <h4 class="card-title">Basic Data</h4>

                                    <form class="forms-sample" action="{{ url('affair/store') }} " method="POST">

                                        @csrf
                                        @method('post')

                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputName">Name</label>
                                            <br>
                                            <input type="text"
                                                style="width: 22%; overflow: visible; border: 1px solid #CED4DA; font-weight: 400;font-size: 0.92rem;  border-radius: 4px ; padding: 10px;"
                                                name="fname" placeholder="First Name" />
                                            <input type="text"
                                                style="width: 22%;overflow: visible; border: 1px solid #CED4DA; font-weight: 400;   font-size: 0.92rem; border-radius: 4px ;  padding: 10px;"
                                                name="mname" placeholder="Middle Name" />
                                            <input type="text"
                                                style="width: 22%;overflow: visible; border: 1px solid #CED4DA;  font-weight: 400; font-size: 0.92rem; border-radius: 4px ;  padding: 10px;"
                                                name="lname" placeholder="Last Name" />
                                            <input type="text"
                                                style="width: 22%;overflow: visible; border: 1px solid #CED4DA;  font-weight: 400; font-size: 0.92rem; border-radius: 4px ;  padding: 10px;"
                                                name="surname" placeholder="SurName" />

                                        </div>
                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputSsn">Ssn</label>
                                            <input type="number" class="form-control" id="exampleInputSsn"
                                                name="student_ssn" placeholder="Ssn" maxlength="14">
                                        </div>
                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputAddress"> Address</label>
                                            <br>
                                            <input type="text"
                                                style="width: 30%; overflow: visible; border: 1px solid #CED4DA; font-weight: 400; font-size: 0.92rem; border-radius: 4px ; padding: 10px;"
                                                placeholder=" Governorate " />
                                            <input type="text"
                                                style="width: 30%;overflow: visible; border: 1px solid #CED4DA;  font-weight: 400; font-size: 0.92rem; border-radius: 4px ;  padding: 10px;"
                                                placeholder="City" />
                                            <input type="text"
                                                style="width: 30%;overflow: visible; border: 1px solid #CED4DA;  font-weight: 400;  font-size: 0.92rem; border-radius: 4px ;  padding: 10px;"
                                                placeholder="Street" />
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputbirthdate">Birthdate</label>
                                            <input type="date" class="form-control" id="exampleInputbirthdate"
                                                name="birthdate" placeholder="Birthdate">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputNationality">Nationality</label>
                                            <input type="text" class="form-control" id="exampleInputNationality"
                                                placeholder="Nationality">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectStage">Educational Stage</label>
                                            <select class="form-control" id="exampleSelectStage">
                                                <option>Primary</option>
                                                <option>Middle</option>
                                                <option>secondary</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAcadmic">Acadmic Level </label>
                                            <input type="text" class="form-control" id="xampleInputAcadmic"
                                                placeholder="Acadmic Level">
                                        </div>

                                        {{-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button> --}}

                                </div>
                            </div>


                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card"> {{-- color 2 --}}
                                <div class="card-body">
                                    <h3 class="card-title" style="text-align: center">Social Data</h3>
                                    <p class="card-description" style="font-weight: bold; text-align: center ">
                                        Father's Data
                                    </p>
                                    <div class="form-group row">
                                        <label for="exampleInputName2" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputFather'spresence"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputjob1" class="col-sm-3 col-form-label">Job</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputjob1"
                                                placeholder="Job">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputphone" class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputphone"
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputFather'spresence"
                                            class="col-sm-3 col-form-label">Father's presence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputMobile"
                                                placeholder="Father's presence">
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 60px;">
                                        <div class="card-body">
                                            <p class="card-description" style="font-weight: bold; text-align: center ">
                                                Father's Data
                                            </p>
                                          
                                                <div class="form-group row">
                                                    <label for="exampleInputName2" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="exampleInputFather'spresence" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputjob1" class="col-sm-3 col-form-label">Job</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="exampleInputjob1"
                                                            placeholder="Job">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputphone"
                                                        class="col-sm-3 col-form-label">Phone</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="exampleInputphone"
                                                            placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputMothers's presence"
                                                        class="col-sm-3 col-form-label">Mothers's presence</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="exampleInputMothers's presence"
                                                            placeholder="Mothers's presence">
                                                    </div>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>






















                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                            Premium <a href="#">Student Performance Tracking System</a> All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>

        </div>
    </div>


    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>

    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>


</body>

</html>
