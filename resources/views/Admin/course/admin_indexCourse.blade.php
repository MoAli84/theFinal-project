<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>i Track</title>
    <base href="{{ URL::to('/') }}">

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
                <a class="navbar-brand brand-logo mr-5" href="staff.html"><img src="images/track (1).svg" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="staff.html"><img src="images/tlogo.svg"
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
                              <i class="ti-settings text-primary"></i>
                              Show Profile
                          </a>
                          <a href="{{ url('/admin/logout') }}" class="dropdown-item">
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
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>

                </ul>
                <div class="tab-content" id="setting-content">

                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="staff.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false"
                            aria-controls="primary">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Staff</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="primary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/index/staff') }}">
                                        Admin </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('manager/index/staff') }}">
                                        Manager </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('affair/index/staff') }}">Student Affair</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('entry/officer/index/staff') }}">Entry Officer</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('doctor/index/staff') }}">Doctor</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('specialist/index/staff') }}">Specialist</a></li>
                            </ul>
                        </div>



                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/index/year') }}">
                            <i class="icon-circle-plus menu-icon"></i>
                            <span class="menu-title">Year </span>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/index/level') }}">
                            <i class="icon-flag menu-icon"></i>
                            <span class="menu-title">Level </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/index/sublevel') }}">
                            <i class="icon-flag menu-icon"></i>
                            <span class="menu-title">Sublevel </span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/index/course') }}">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Courses</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/index/nationality') }}">
                            <i class="icon-flag menu-icon"></i>
                            <span class="menu-title">Nationality </span>
                        </a>
                    </li>



                    <li class="nav-item">

                        <a class="nav-link" data-toggle="collapse" href="#stuff" aria-expanded="false"
                            aria-controls="stuff">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Address</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="stuff">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('admin/index/governorate') }}">Governorate</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('admin/index/town') }}">Town</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('admin/index/district') }}">District</a>
                                </li>
                            </ul>
                        </div>
                    </li>



                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">

                                <p class="card-description" style="margin: 20px;">
                                    <a href="{{ url('admin/create/course') }}"> <button type="button"
                                            class="btn btn-primary"> Add Course</button></a>
                                </p>
                                <div class="row">



                                    <div class="card-body">


                                        <div class="container">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success" role="alert">

                                                    {{ $message }}

                                                </div>
                                            @endif
                                        </div>


                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>

                                                    <tr>
                                                        <th>ID</th>
                                                        <th>COURSE NAME</th>
                                                        <th>COURSE CODE</th>
                                                        <th>ACTIONS</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($data as $info)
                                                        <tr>
                                                            <td>{{ $info->id }}</td>
                                                            <td>{{ $info->MaterialName }}</td>
                                                            <td>{{ $info->code }}</td>

                                                            <td>

                                                                <a href='{{ url('admin/edit/course/' . $info->id) }}'
                                                                    class='btn btn-primary m-r-1em'>Edit</a>
                                                                {{-- **********************************POP UP of Delete..*************************************************** --}}
                                                                <a data-toggle="modal"
                                                                    data-target="#modal_single_del{{ $info->id }}"
                                                                    class='btn btn-danger m-r-1em'>Delete</a>

                                                            </td>

                                                        </tr>

                                                        <div class="modal" id="modal_single_del{{ $info->id }}"
                                                            tabindex="-1" role="dialog">

                                                            <div class="modal-dialog" role="document">

                                                                <div class="modal-content">

                                                                    <div class="model-header">

                                                                        <h5 class="modal-title">Delete Conformation
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">
                                                                                &times;

                                                                            </span>
                                                                        </button>

                                                                    </div>

                                                                    <div class="modal-body">Delete...!<br>

                                                                        {{ $info->MaterialName . ' its code  : ' . $info->code }}
                                                                    </div>

                                                                    <div class="modal-footer">


                                                                        <form
                                                                            action="{{ url('admin/delete/course/' . $info->id) }}"
                                                                            method="post">

                                                                            @method('delete')
                                                                            @csrf

                                                                            <div class="not-empty-record">

                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Delete</button>
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">close</button>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        {{-- **************************end of pop up of delete*********************** --}}
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
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
