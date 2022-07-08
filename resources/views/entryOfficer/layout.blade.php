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

        .table tbody tr td div input{
            border: 0px;
            width: 100%;
            font-size: 16px;
        }

        .table thead tr td div input{
            border: 0px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        /* .b2 td div input {
            border: 0px;
            width: 30%;
        } */

        #rb1{
            width: 25%;
            font-size: 16px;
            outline: 1px solid rgb(204, 204, 204);
            border-style: hidden;
        }

        #rb2{
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
                <a class="navbar-brand brand-logo mr-5" href="entry.html"><img src="images/track (1).svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="entry.html"><img src="images/logo.svg" alt="logo" /></a>
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
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings
                            </a> --}}
                            <a class="dropdown-item"href="{{ url('entry/logout') }}">
                                <i class="ti-power-off text-primary" ></i> Logout
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
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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

            @yield('content')


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



<script>


var rowIdx = 0;
// jQuery button click event to add a row.
$('#addBtn').on('click', function() {
    // Adding a row inside the tbody.
    $('#tbody').append(`<tr id="R${++rowIdx}">
  <td class="row-index text-center">
    <input Row ${rowIdx} style= "  border: 0px;
width: 80%;">
        </td>
        <td class="row-index text-center">
    <input Row ${rowIdx} style= "  border: 0px;
width: 90%;">
        </td>
   </tr>`);
});

/////////////////////

var rowIdx1 = 0;
// jQuery button click event to add a row.
$('#addBtn1').on('click', function() {
    // Adding a row inside the tbody.
    $('#tbody1').append(`<tr id="R${++rowIdx1}">
  <td class="row-index text-center">
    <input Row ${rowIdx1} style= "  border: 0px;
width: 80%;">
        </td>
        <td class="row-index text-center">
    <input Row ${rowIdx1} style= "  border: 0px;
width: 90%;">
        </td>
   </tr>`);
});
</script>

</body>

</html>
