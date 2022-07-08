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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* .table th {
            padding: 0;
            padding-right: 0.2rem;

        } */

        .table thead tr td {
            padding: 0.2rem 0.5rem;
            /* text-align: center; */
            font-size: 16px;
            font-weight: bold;
        }

        .table tbody tr td {
            padding: 0.2rem 0.5rem;

            font-size: 16px;
        }

        /* .table  th {
            padding: 0.2rem 0.5rem;
            text-align: center;
            font-size: 14px;
        } */

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 10%;
        }

        /* td div input {
            border: 0px;
            width: 100%;
        } */

        .table tbody tr td div input {
            border: 0px;
            width: 100%;
            font-size: 16px;
        }

        .table thead tr td div input {
            border: 0px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        /* .b2 td div input {
            border: 0px;
            width: 30%;
        } */

        #rb1 {
            width: 25%;
            font-size: 16px;
            outline: 1px solid rgb(204, 204, 204);
            border-style: hidden;
        }

        #rb2 {
            font-size: 16px;
            border: 0px;
            width: 100%;
            border-style: hidden;

        }

        #se :active {
            background-color: rgb(201, 219, 234);
        }

        /* #se {
            background-color: rgb(230, 0, 0);

        }

        #se option{
            background-color: rgb(19, 113, 129);

        } */

        .main {
            width: 50%;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="entry.html"><img src="images/track (1).svg" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="entry.html"><img src="images/logo.svg"
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
                            {{-- <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings
                            </a> --}}
                            <a class="dropdown-item" href="{{ url('entry/logout') }}">
                                <i class="ti-power-off text-primary"></i> Logout
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

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->







            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('entry.home') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title" href="{{ route('entry.home') }}">Dashboard</span>
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
                                <li class="nav-item"> <a class="nav-link" href="{{ url('entry/levels/one') }}">1</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('entry/levels/two') }}">2</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('entry/levels/three') }}">3</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('entry/levels/four') }}">4</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('entry/levels/five') }}">5</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('entry/levels/sex') }}">6</a>
                                </li>
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
                                <li class="nav-item"><a class="nav-link" href="#">7</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ url('entry/levels/eight') }}">8</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="#">10</a></li>
                                <li class="nav-item"> <a class="nav-link">11</a></li>
                                <li class="nav-item"> <a class="nav-link">12</a></li>
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
                                <div class="row">
                                    <div class="card-body">

                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="nav-item">
                                                <a href="#First-Term"
                                                    @if ($d4 == 'second term') class="nav-link active"
                                                @elseif($d4 == 'first term')
                                                class="nav-link" @endif
                                                    data-bs-toggle="tab" style=" color: rgb(75, 73, 172);">First
                                                    Term</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Second-Term"
                                                    @if ($d4 == 'second term') class="nav-link active"
                                               @elseif($d4 == 'first term')
                                               class="nav-link" @endif
                                                    data-bs-toggle="tab" style=" color: rgb(75, 73, 172);">Second
                                                    Term</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="First-Term">
                                                <div class="form-1">
                                                    <div class="col-md-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="row">
                                                                <div class="card-body">
                                                                    <select id='se'
                                                                        style="margin: 20px; padding: 3px;
                                                               -webkit-appearance: none;
                                                              -moz-appearance: none;
                                                          appearance: none;
                                                          height: 57px;
                                                          padding: 10px 22px 12px 14px;
                                                          text-align: center;
                                                          background-size: 10px;
                                                          transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
                                                          border: 1px solid #ddd;
                                                          border-radius: 14px;
                                                          ">

                                                                        <option>Choose Action</option>
                                                                        <option value="material-p">Material Performance
                                                                        </option>
                                                                        <option value="activity-p">Activity Performance
                                                                        </option>
                                                                        <option value="competitions">Competitions
                                                                        </option>
                                                                        <option value="attendance">Attendance</option>
                                                                        <option value="behavior">Behavior</option>
                                                                    </select>


                                                                    <!----------------------------------------------------------- *********************behavior****************** ----------------------------------------------------------------------------------->
                                                                    <div class="b5" id="box4">
                                                                        <div style="margin-right:0px ;">
                                                                            <div class="row"
                                                                                style="margin-left:370px ;">
                                                                                <div class="col-md-15">
                                                                                    <div class="input-group mb-4">

                                                                                        <input type="text"
                                                                                            class="form-control input-text"
                                                                                            placeholder="Search student...."
                                                                                            aria-label="Recipient's username"
                                                                                            aria-describedby="basic-addon2"
                                                                                            name="studentid">
                                                                                        <div
                                                                                            class="input-group-append">
                                                                                            <input
                                                                                                class="btn btn-outline-primary btn-sm"
                                                                                                type="submit"
                                                                                                name="btnsubmit">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <table class="table table-bordered"
                                                                            style="width:100%; height: 60px; ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="header-label"
                                                                                        style="width:6%">id</td>
                                                                                    <td class="header-label"
                                                                                        style="width:32%">Students
                                                                                        Names</td>
                                                                                    <td class="header-label"
                                                                                        style="width:62%">behavior</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="tr-inputs">
                                                                                    <td>1</td>
                                                                                    <td>tuqa hussien taha</td>
                                                                                    <td
                                                                                        style="display: flex; width: 100%;">
                                                                                        <div
                                                                                            style="padding-left: -60px; margin-left: 0.5rem; margin-top: 0.2rem; ">
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="flexRadioDefault"
                                                                                                    id="rb1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault3"
                                                                                                    style="margin-left: 0.1rem;">Good</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="flexRadioDefault"
                                                                                                    id="rb1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault4"
                                                                                                    style="margin-left: 0.1rem;">Bad</label>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="w-80"
                                                                                            style="margin-left: 1rem; margin-top: 0.7rem; margin-bottom: 0.7rem;"
                                                                                            id=rb2>

                                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="30"></textarea>
                                                                                        </div>

                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!----------------------------------------------------------- *********************end behavior****************** ----------------------------------------------------------------------------------->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /******** second term ***********/    -->
                                            <div class="tab-pane fade" id="Second-Term">
                                                <div class="form-2">
                                                    <div class="col-md-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="row">
                                                                <div class="card-body">
                                                                    <select id='see'
                                                                        style="margin: 20px; padding: 3px;
                                                             -webkit-appearance: none;
                                                            -moz-appearance: none;
                                                        appearance: none;
                                                        height: 57px;
                                                        padding: 10px 22px 12px 14px;
                                                        text-align: center;
                                                        background-size: 10px;
                                                        transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
                                                        border: 1px solid #ddd;
                                                        border-radius: 14px;">

                                                                        <option>Choose Action</option>
                                                                        <option value="material-p">Material Performance
                                                                        </option>
                                                                        <option value="activity-p">Activity Performance
                                                                        </option>
                                                                        <option value="competitions">Competitions
                                                                        </option>
                                                                        <option value="attendance">Attendance</option>
                                                                        <option value="behavior">Behavior</option>
                                                                    </select>



                                                                    <!----------------------------------------------------------- *********************behavior****************** ----------------------------------------------------------------------------------->

                                                                    <div class="b5" id="box04">
                                                                        <div style="margin-right:0px ;">
                                                                            <div class="row"
                                                                                style="margin-left:370px ;">
                                                                                <div class="col-md-15">
                                                                                    <div class="input-group mb-4">

                                                                                        @foreach ($d2 as $dd2)
                                                                                            <input type="text"
                                                                                                class="form-control input-text"
                                                                                                placeholder="Search student...."
                                                                                                aria-label="Recipient's username"
                                                                                                aria-describedby="basic-addon2"
                                                                                                value="{{ $dd2['id'] }}">
                                                                                            <div
                                                                                                class="input-group-append">
                                                                                                <input
                                                                                                    class="btn btn-outline-primary btn-sm"
                                                                                                    type="submit"
                                                                                                    name="btnsubmit">
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <table class="table table-bordered"
                                                                            style="width:100%; height: 60px; ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="header-label"
                                                                                        style="width:6%">id</td>
                                                                                    <td class="header-label"
                                                                                        style="width:32%">Students
                                                                                        Names</td>
                                                                                    <td class="header-label"
                                                                                        style="width:62%">behavior</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                {{-- <form action="{{route('e.search',$id)}}" method="post">
                                                                                    @csrf --}}

                                                                                <tr class="tr-inputs">

                                                                                    <td>{{ $dd2['id'] }}</td>
                                                                                    <td>{{ $dd2['Name'] }}</td>
                                                                                    @endforeach
                                                                                    {{-- </form> --}}
                                                                                    <td
                                                                                        style="display: flex; width: 100%;">
                                                                                        <div
                                                                                            style="padding-left: -60px; margin-left: 0.5rem; margin-top: 0.2rem; ">
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="flexRadioDefault"
                                                                                                    id="rb1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault3"
                                                                                                    style="margin-left: 0.1rem;">Good</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="flexRadioDefault"
                                                                                                    id="rb1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault4"
                                                                                                    style="margin-left: 0.1rem;">Bad</label>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="w-80"
                                                                                            style="margin-left: 1rem; margin-top: 0.7rem; margin-bottom: 0.7rem;"
                                                                                            id=rb2>

                                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="30" name="description"></textarea>
                                                                                        </div>

                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                    <!----------------------------------------------------------- *********************end behavior****************** ----------------------------------------------------------------------------------->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---------------------------------------------------------------------- end term 2 --------------------------------------------------------------------->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
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
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
