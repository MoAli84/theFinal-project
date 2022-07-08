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
    <link rel="stylesheet" href="vendors/css/show.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/t.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        ul li a {
            color: rgb(75, 73, 172);
        }

    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-7 " href="{{ url('affair/index') }}"><img src="images/track.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('affair/index') }}"><img src="images/tlogo.svg" alt="logo" /></a>
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
                            <a class="dropdown-item"  href="{{ url('affair/logout') }}">
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
                    <a class="nav-link" href="{{ url('affair/index') }}">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false" aria-controls="primary">
                      <i class="icon-book menu-icon"></i>
                      <span class="menu-title">primary</span>
                      <i class="menu-arrow"></i>
                    </a>

                    <div class="collapse" id="primary">
                    <ul class="nav flex-column sub-menu">

                      <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/one') }}" > 1 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{url('affair/index/two') }}" > 2 </a>
                      </li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/three') }}" >3</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/four') }}" >4</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/five') }}" >5</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/sex') }}" >6</a></li>
                    </ul>
                    </div>



                  </li>
                              <!-- ************************************************************************** -->
                        <!-- **************************************************************************************** -->
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false" aria-controls="middle">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                          </a>

                          <div class="collapse" id="middle">
                          <ul class="nav flex-column sub-menu">

                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/seven') }}"> 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/eight') }}"> 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/nine') }}">3</a></li>

                          </ul>
                          </div>
                        </li>
                        <!-- *************************************************************************** -->
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false" aria-controls="secondary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                          </a>

                          <div class="collapse" id="secondary">
                          <ul class="nav flex-column sub-menu">

                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/ten') }}"> 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/eleven') }}"> 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('affair/index/twelve') }}">3</a></li>

                          </ul>
                          </div>

                        </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('affair/create') }}">
                      <i class="icon-plus menu-icon"></i>
                      <span class="menu-title">Add Student</span>
                    </a>
                  </li>






                </ul>
              </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                        <div class="col-md-10 grid-margin stretch-card">
                            <div class="card">
                                <div class="row">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title">Basic Table</h4>
                        <p class="card-description">

                        </p> -->

                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="nav-item">
                                                <a href="#Basic-Data" class="nav-link active" data-bs-toggle="tab"
                                                    style=" color: rgb(75, 73, 172);">Basic Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Social-Data" class="nav-link" data-bs-toggle="tab"
                                                    style=" color: rgb(75, 73, 172);">Social Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Health-Data" class="nav-link" data-bs-toggle="tab"
                                                    style=" color: rgb(75, 73, 172);">Health Data</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                    <a href="#Performance" class="nav-link" data-bs-toggle="tab" style=" color: rgb(75, 73, 172);"> Performance</a>
                                </li> --}}

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="Basic-Data">
                                                <div class="form-1">
                                                    <img src="images/avatar2.jpg"
                                                        style="width: 10%; margin-bottom: 20px;">
                                                    <div class="table-responsive">
                                                        <table class="table  table-striped ">

                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Full Name</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->Name . ' ' . $info->FatherName . ' '  . $info->Surname }}
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Student Ssn</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->StudentSsn }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>
                                                                <tr>

                                                                    <th scope="row">Address</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->GovName . ' / ' . $info->TownName . ' / ' . $info->DistrictName }}
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Birth Date</th>
                                                                    <td colspan="2">
                                                                        @foreach ($data as $info)
                                                                            {{ $info->Birthdate }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td colspan="2">
                                                                        @foreach ($data as $info)
                                                                            {{ $info->Sex }}
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Year </th>
                                                                    @foreach ( $data as $info )
                                                                         <td colspan="2" >{{ $info->year }}</td>
                                                                    @endforeach
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Educational Level</th>
                                                                    @foreach ( $data as $info )
                                                                         <td colspan="2" >{{ $info->EduLevelName }}</td>

                                                                    @endforeach
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Sublevel</th>
                                                                    @foreach ( $data as $info )
                                                                    <td colspan="2" >{{ $info->SubLevelName }}</td>
                                                                    @endforeach
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Social-Data">
                                                <div class="form-2">


                                                  <div class="section"
                                                        style="text-align: center; font-weight: bold;">Father
                                                        Information</div>

                                                     <div class="inner-wrap">
                                                        <table class="table table-striped table-bordered">

                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" width='45%'>Father Name</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->FatherName . ' ' . $info->Surname }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>

                                                                <tr>
                                                                  <th scope="row" >Father SSN</th>
                                                                  <td>
                                                                      @foreach ($data as $info)
                                                                          {{ $info->FatherSsn }}
                                                                      @endforeach
                                                                  </td>

                                                              </tr>
 
                                                                <tr>
                                                                    <th scope="row">Father Job</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->FatherJob }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Father Phone</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ '0'.$info->FatherPhone }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>



                                                    <div class="section"
                                                        style="text-align: center; font-weight: bold;">Mother
                                                        Information</div>

                                                     <div class="inner-wrap">
                                                        <table class="table table-striped table-bordered">

                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" width='45%'>Mother Name</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->MotherName }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>

                                                                <tr>
                                                                  <th scope="row">Mother SSN</th>
                                                                  <td>
                                                                      @foreach ($data as $info)
                                                                          {{ $info->MotherSsn }}
                                                                      @endforeach
                                                                  </td>

                                                              </tr>

                                                                <tr>
                                                                    <th scope="row">Mother Job</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ $info->MotherJob }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mother Phone</th>
                                                                    <td>
                                                                        @foreach ($data as $info)
                                                                            {{ '0'.$info->MotherPhone }}
                                                                        @endforeach
                                                                    </td>

                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Health-Data">
                                                <div class="form-3">

                                                    <form>
                                                        <div class="section"></div>
                                                        <div class="inner-wrap">
                                                            <table class="table  table-striped table-bordered">

                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">chronic disease:</th>
                                                                        <td>
                                                                          @foreach ($data as $dis)
                                                                          {{ $dis->chronic }}
                                                                      @endforeach
                                                                        </td>

                                                                    </tr>
                                                                    <tr>

                                                                      <th scope="row">chronic name:</th>
                                                                      <td>
                                                                        @foreach ($data as $dis)
                                                                          {{ $dis->disease_name }}
                                                                      @endforeach
                                                                      </td>

                                                                  </tr>

                                                                    <tr>
                                                                        <th scope="row">disease degree:</th>
                                                                        <td>
                                                                          @foreach ($data as $dis)
                                                                          {{ $dis->disease_degree }}
                                                                      @endforeach
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Height:</th>
                                                                        <td>
                                                                          @foreach ($data as $dis)
                                                                          {{ $dis->height }}
                                                                      @endforeach
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">weight:</th>
                                                                        <td>
                                                                          @foreach ($data as $dis)
                                                                          {{ $dis->weight }}
                                                                      @endforeach
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Distinctive physical
                                                                            characteristics:</th>
                                                                        <td>
                                                                          @foreach ($data as $dis)
                                                                          {{ $dis->extra_data }}
                                                                      @endforeach
                                                                        </td>

                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>

                                                        <div class="section"></div>




                                                    </form>
                                                </div>

                                            </div>




                                        </div>
                                    </div>
                                </div>





                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">

                </div>
                <div class="col-12 grid-margin">

                </div>

            </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium
                    <a href="#">Student Performance Tracking System</a> All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="ti-heart text-danger ml-1"></i></span>
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
    <script src="js/show.js"></script>


    <!-- endinject -->
</body>

</html>
