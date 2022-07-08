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
        <a class="navbar-brand brand-logo mr-7 " href="{{ url('affair/index') }}"><img src="images/track.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('affair/index') }}"><img src="images/tlogo.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div> -->
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ url('affair/logout') }}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
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
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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


            <div class="col-md-12 grid-margin stretch-card">
              <div class="card"  >
                <div class="row">
                    <div class="card-body">

                        <div class="container">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">

                                    {{ $message }}

                                </div>
                            @endif
                        </div>


                        <p class="card-description">
                          <button type="button" class="btn btn-primary"> Upgrade Level</button>
                        </p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead >

                                    <tr>
                                        <th>Id</th>
                                        <th>Full Name</th>
                                        <th>SSN</th>
                                        <th>Gender</th>
                                        <th>Birthdate</th>
                                        <th>Nationality</th>
                                        <th>Religion</th>
                                        <th>Address</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>
                                <tbody>

                                    @foreach ($data as $info)
                                    <tr>
                                        <td> {{$info->id }}</td>
                                        <td> {{ $info->Name . ' '. $info->FatherName . ' '. $info->Surname }} </td>
                                        <td> {{ $info->StudentSsn }}</td>
                                        <td> {{ $info->Sex }}</td>
                                        <td> {{ $info->Birthdate }}</td>
                                        <td> {{ $info->Nation }}</td>
                                        <td> {{ $info->ReligName }}</td>
                                        <td> {{ $info->DistrictName . ' / '. $info->TownName. ' / '. $info->GovName }}</td>
                                        <td>
                                            <a href="{{ url('affair/show/'. $info->StudentSsn) }}" class="btn btn-info m-r-1em">Show</a>
                                            <a href="{{ url('affair/edit/'. $info->id) }}" class="btn btn-primary m-r-1em">Edit</a>
                                            <a data-toggle="modal" data-target="#modal_single_del{{ $info->StudentSsn }}" class="btn btn-danger m-r-1em">Delete</a>
                                        </td>
                                    </tr>


                                        <div class="modal" id="modal_single_del{{ $info->StudentSsn }}" tabindex="-1" role="dialog">

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
                                                        <div class="alert-danger p-3">
                                                            {{$info->Name . ' ' . $info->FatherName }}
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">


                                                        <form
                                                            action="{{ url('affair/delete/' . $info->StudentSsn) }}"
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Premium <a href="#" >Student Performance Tracking System</a>  All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
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
