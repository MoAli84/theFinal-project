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
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/t.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-7 " href="{{ url('doctor/home') }}"><img src="images/track.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('doctor/home') }}"><img src="images/tlogo.svg"
                        alt="logo" /></a>
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
                              <i class="ti- text-primary"></i>
                              Show Profile
                          </a>
                          <a href="{{ url('/doctor/logout') }}" class="dropdown-item">
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
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

            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('doctor/index') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false"
                            aria-controls="primary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">primary</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="primary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/one') }}"> 1
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/two') }}"> 2
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/three') }}">3</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/four') }}">4</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/five') }}">5</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/sex') }}">6</a></li>
                            </ul>
                        </div>


                    </li>
                    <!-- ************************************************************************** -->
                    <!-- **************************************************************************************** -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false"
                            aria-controls="middle">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="middle">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/seven') }}">
                                        1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/eight') }}">
                                        2 </a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/nine') }}">3</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- *************************************************************************** -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false"
                            aria-controls="secondary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/ten') }}"> 1
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('doctor/index/eleven') }}">
                                        2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/twelve') }}">3</a></li>

                            </ul>
                        </div>

                    </li>

                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome , {{ auth()->guard('doctors')->user()->fullName }}</h3>

                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white " type="button"
                                                id="dropdownMenuDate2" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (6 May 2022)
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                    <img src="images/dashboard/people.svg" alt="people">
                                    <div class="weather-info">
                                        <div class="d-flex">
                                            <div>
                                                <h2 class="mb-0 font-weight-normal"><i
                                                        class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="location font-weight-normal">Banha</h4>
                                                <h6 class="font-weight-normal">Qalyubiyah</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Student Number</p>
                                            <p class="fs-30 mb-2">700</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Recent Registrations </p>
                                            <p class="fs-30 mb-2">80</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Number Of Activities</p>
                                            <p class="fs-30 mb-2">8</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card card-light-danger">
                                            <div class="card-body">
                                                <p class="mb-4">Number Of Social Workers</p>
                                                <p class="fs-30 mb-2">8</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Recent Registrations</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Level</th>
                                                    <th>Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Ahmed Ali</td>
                                                    <td class="font-weight-bold">2</td>
                                                    <td>21 feb 2022</td>

                                                </tr>
                                                <tr>
                                                    <td>Mohamed Mahamod</td>
                                                    <td class="font-weight-bold">3</td>
                                                    <td>13 feb 2022</td>

                                                </tr>
                                                <tr>
                                                    <td>Mohamed Ahmed</td>
                                                    <td class="font-weight-bold">4</td>
                                                    <td>28 feb 2022</td>

                                                </tr>
                                                <tr>
                                                    <td>Fatma Mohamed</td>
                                                    <td class="font-weight-bold">5</td>
                                                    <td>30 feb 2022</td>

                                                </tr>
                                                <tr>
                                                    <td>Amal Khaled</td>
                                                    <td class="font-weight-bold">5</td>
                                                    <td>01 feb 2022</td>

                                                </tr>
                                                <tr>
                                                    <td>Ahmed Ali</td>
                                                    <td class="font-weight-bold">4</td>
                                                    <td>20 feb 2022</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">To Do Lists</h4>
                                    <div class="list-wrapper pt-2">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Add New Student
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked>
                                                        Check student Profile
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>

                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Upgrade Student
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-items d-flex mb-0 mt-2">
                                        <input type="text" class="form-control todo-list-input"
                                            placeholder="Add new task">
                                        <button
                                            class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i
                                                class="icon-circle-plus"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                            Premium <a href="#">Student Performance Tracking System</a> All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
