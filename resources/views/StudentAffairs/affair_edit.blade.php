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
    <!-- Plugin css for this page  -->
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
                <a class="navbar-brand brand-logo mr-5" href="{{ url('affair/index') }}"><img
                        src="images/track (1).svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('affair/index') }}"><img src="images/tlogo.svg"
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
                            <a class="dropdown-item"  href="{{ url('affair/logout') }}">
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

                <div class="tab-content" id="setting-content">

                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
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



                                <div class="card-body">

                                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                                    <h4 class="card-title">Basic Data</h4>
                                    <!-- <p class="card-description">
                      Basic form layout
                    </p> -->
                                    <form class="forms-sample" action="{{ 'affair/update' }}" method="POST">
                                        {{-- @method('PUT') --}}
                                        @csrf
{{--  --}}

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <input type="hidden" name="id" value="{{ $data->id }}">

                                        <div class="form-group">
                                            <label for="exampleInputfssn">Student Name</label>
                                            <input type="text" class="form-control" name="Name"
                                                value="{{ $data->Name }}" id="exampleInputfssn" placeholder="student name"
                                                style="width: 50%;" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputfssn">Father Name</label>
                                            <input type="text" class="form-control" name="FatherName"
                                                value="{{ $data->FatherName }}" id="exampleInputfssn" placeholder="father name"
                                                style="width: 50%;" >
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputfssn">Surname</label>
                                            <input type="text" class="form-control" name="Surname"
                                                value="{{ $data->Surname }}" id="exampleInputfssn" placeholder="surname"
                                                style="width: 50%;" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn">Student Ssn</label>
                                            <input type="text" class="form-control" name="StudentSsn"
                                                value="{{ $data->StudentSsn }}" id="exampleInputSsn" placeholder="studentSsn"
                                                style="width: 50%;" minlength="14" maxlength="14">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectReligion">Governorate</label>
                                            <select class="form-control" name="GovernorateId" style="width: 50%;">
                                                @foreach ($govern as $info)
                                                    <option value="{{ $info->Id }}"
                                                        @if ($data->GovernorateId == $info->Id) selected @endif>
                                                        {{ $info->GovName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleSelectReligion">Town</label>
                                            <select class="form-control" name="TownId" style="width: 50%;">
                                                @foreach ($town as $info)
                                                    <option value="{{ $info->Id }}"
                                                        @if ($data->TownId == $info->Id) selected @endif>
                                                        {{ $info->TownName }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleSelectReligion">District</label>
                                            <select class="form-control" name="DistrictId" style="width: 50%;">
                                                @foreach ($dist as $info)
                                                    <option value="{{ $info->Id }}"
                                                        @if ($data->DistrictId == $info->Id) selected @endif>
                                                        {{ $info->DistrictName }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" name="GenderId" style="width: 50%;">
                                                @foreach ($sex as $born)
                                                    <option value="{{ $born->id }}"
                                                        @if ($data->GenderId == $born->id) selected @endif>
                                                        {{ $born->Sex }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputBirth1">Birth Date</label>
                                            <input type="date" class="form-control" id="exampleInputBirthdate"
                                                name="Birthdate" value="{{ $data->Birthdate }}"
                                                placeholder="Birthdate" style="width: 50%;">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Nationality</label>
                                            <select class="form-control" name="NationalityId" style="width: 50%;">
                                                @foreach ($nation as $where)
                                                    <option value="{{ $where->id }}"
                                                        @if ($data->NationalityId == $where->id) selected @endif>
                                                        {{ $where->Nation }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleSelectReligion">Religion</label>
                                            <select class="form-control" name="ReligionId" style="width: 50%;">
                                                @foreach ($religion as $info)
                                                    <option value="{{ $info->id }}"
                                                        @if ($data->ReligionId == $info->id) selected @endif>
                                                        {{ $info->ReligName }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <br>
                                        <hr>
                                        <h3>
                                            <h4>family data</h4>
                                            <br>


                                            <div class="form-group ">
                                                <label for="exampleInputfssn">Father Ssn</label>
                                                <input type="text" class="form-control" name="FatherSsn"
                                                    value="{{ $data->FatherSsn }}" id="exampleInputfssn" placeholder="father ssn"
                                                    style="width: 50%;" minlength="14" maxlength="14">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputfjob">Father Job</label>
                                                <input type="text" class="form-control" name="FatherJob"
                                                    value="{{ $data->FatherJob }}" id="exampleInputfjob" placeholder="father job"
                                                    style="width: 50%;">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputfphone">Father Phone</label>
                                                <input type="text" class="form-control" name="FatherPhone"
                                                    value="{{ $data->FatherPhone }}" id="exampleInputfphone" placeholder="father phone"
                                                    style="width: 50%;" maxlength="11">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputmname">Mother Name</label>
                                                <input type="text" class="form-control" name="MotherName"
                                                    value="{{ $data->MotherName }}" id="exampleInputmname" placeholder="mother name"
                                                    style="width: 50%;">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputmssn">Mother Ssn</label>
                                                <input type="text" class="form-control" name="MotherSsn"
                                                    value="{{ $data->MotherSsn }}" id="exampleInputmssn" placeholder="mother ssn"
                                                    style="width: 50%;" minlength="14" maxlength="14" >
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputmjob">Mother Job</label>
                                                <input type="text" class="form-control" name="MotherJob"
                                                    value="{{ $data->MotherJob }}" id="exampleInputmjob" placeholder="mother job"
                                                    style="width: 50%;">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputmphone">Mother Phone</label>
                                                <input type="text" class="form-control" name="MotherPhone"
                                                    value="{{ $data->MotherPhone}}" id="exampleInputmphone" placeholder="mother phone"
                                                    style="width: 50%;" maxlength="11">
                                            </div>



{{-- ------------------------------------------------         Educatin       --}}
                                            {{-- <div class="form-group">
                                                <label for="exampleSelectA">Academic Year</label>
                                                <select class="form-control" name="AcdYearId" id="exampleSelectA">
                                                    @foreach ($year as $info)
                                                        <option value="{{ $info->id }}">
                                                            {{ $info->year }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectStage">Educational Level</label>
                                                <select class="form-control" name="LevelId" id="exampleSelectGender">
                                                    @foreach ($sub as $info)
                                                    <option value="{{ $info->id }}">
                                                        {{ $info->SublevelName .' - '. $info->EduLevelName }}</option>
                                                @endforeach
                                                </select>
                                            </div> --}}
                                            {{-- <div class="form-group">
                                                <label for="exampleInputClass">Term</label>
                                                <select class="form-control" name="TermId" id="exampleSelectGender">
                                                    @foreach ($term as $info)
                                                        <option value="{{ $info->id }}"
                                                            >
                                                            {{ $info->TermName }}</option>
                                                    @endforeach
                                                </select>
                                            </div><br><br> --}}



{{-- -----------------------------------------------         Health          --}}


                                            <hr>
                                            <h4>Health data</h4>
                                            <br>

                                            <div class="form-group ">
                                                <label for="exampleInputchroinc"
                                                    class="col-sm-2 col-form-label"><b>Have Chroinc</b></label>
                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" name='chronic'
                                                        @foreach ($disease as $dis) value=" {{ $dis->chronic }}" @endforeach
                                                        id="exampleInputchronic" placeholder="Yes / No"
                                                        style="width: 20%;">
                                                </div>
                                            </div>

                                            <div class="form-group " style="padding-right: .5em;">
                                                <label for="exampleInputAddress"><b>Health</b></label>
                                                <br>
                                                <input type="text" name="disease_name"
                                                    @foreach ($disease as $dis) value="{{ $dis->disease_name }}" @endforeach
                                                    style="width: 30%; overflow: visible; border: 1px solid #CED4DA;
                                    font-weight: 400;
                                    font-size: 0.92rem;width: 18%;
                                    border-radius: 4px ; padding: 10px;" placeholder="Disease Name" />
                                                <input type="number" name="disease_degree"
                                                    @foreach ($disease as $dis) value="{{ $dis->disease_degree }}" @endforeach
                                                    style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                          font-weight: 400;
                                          font-size: 0.92rem;width: 18%;
                                          border-radius: 4px ;  padding: 10px;" placeholder="Disease Degree" />
                                                <span
                                                    style="font-family: Times, serif; font: 85;color: rgb(187, 111, 111)">
                                                    * Enter
                                                    (No) if you hasn't</span>

                                            </div>

                                            <div class="form-group" style="padding-right: .5em;">
                                                <label for="exampleInputAddress"><b>Body</b></label>
                                                <br>
                                                <input type="number" name="height"
                                                    @foreach ($disease as $dis) value="{{ $dis->height }}" @endforeach
                                                    style="width: 30%; overflow: visible; border: 1px solid #CED4DA;
                                    font-weight: 400;
                                    font-size: 0.92rem;width: 18%;
                                    border-radius: 4px ; padding: 10px;" placeholder="Height :100" />
                                                <input type="number" name="weight"
                                                    @foreach ($disease as $dis) value="{{ $dis->weight }}" @endforeach
                                                    style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                          font-weight: 400;
                                          font-size: 0.92rem;width: 18%;
                                          border-radius: 4px ;  padding: 10px;" placeholder="Weight : cm" />

                                            </div>

                                            <div class="form-group ">
                                                <label for="exampleInputchroinc"
                                                    class="col-sm-2 col-form-label"><b>Extra Data of charactristic
                                                    </b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name='extra_data'
                                                        @foreach ($disease as $dis) value="{{ $dis->extra_data }}" @endforeach
                                                        id="exampleInputchroinc" placeholder="Extra Data"
                                                        style="width: 50%; height: 100%;">
                                                </div>
                                            </div>


                                            <div style="text-align: center">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-warning">Reset</button>
                                            </div>



                                    </form>
                                </div>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a
                    href="#">Student Performance Tracking System</a> All rights reserved.</span>
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
    <!-- End custom js for this page-->
</body>

</html>
