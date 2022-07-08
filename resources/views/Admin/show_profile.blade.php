<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>i Track</title>
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
    ul li a{
      color: rgb(75, 73, 172);
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-7 " href="indexx.html"><img src="images/track.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="indexx.html"><img src="images/tlogo.svg" alt="logo"/></a>
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
              <a class="dropdown-item preview-item">
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
              <a class="dropdown-item">
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
            <a class="nav-link" href="indexx.html">
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

                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#first-term"
                    aria-expanded="false" aria-controls="first-term"> first term </a></li>


                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#second-term"
                    aria-expanded="false" aria-controls="second-term"> second term </a></li>


               

              </ul>
            </div>
            <div class="collapse" id="first-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">4</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">5</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">6</a></li>
            </ul>
            </div>
            <div class="collapse" id="second-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">4</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">5</a></li>
              <li class="nav-item"> <a class="nav-link" href="levels.html">6</a></li>
            </ul>
            </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false" aria-controls="middle">
                          <i class="icon-book menu-icon"></i>
                          <span class="menu-title">middle</span>
                          <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="middle">
                          <ul class="nav flex-column sub-menu">
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-term"
                                aria-expanded="false" aria-controls="f-term"> first term </a></li>
            
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-term"
                                aria-expanded="false" aria-controls="s-term"> second term </a></li>
            
            
                           
            
                          </ul>
                        </div>
                        <div class="collapse" id="f-term">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                          
                        </ul>
                        </div>
            
                        <div class="collapse" id="s-term">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                          
                        </ul>
                        </div>
            
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false" aria-controls="secondary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                          </a>
                          <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">
              
                              <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-t"
                                  aria-expanded="false" aria-controls="f-t"> first term </a></li>
              
              
                              <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-t"
                                  aria-expanded="false" aria-controls="s-t"> second term </a></li>
              
              
                             
              
                            </ul>
                          </div>
                          <div class="collapse" id="f-t">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                          <ul class="nav flex-column sub-menu">
              
                            <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                            
                          </ul>
                          </div>
                          <div class="collapse" id="s-t">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                          <ul class="nav flex-column sub-menu">
              
                            <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                            
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
                   
                            <ul class="nav nav-tabs" id="myTab" >
                                <li class="nav-item">
                                    <a href="#Basic-Data" class="nav-link active" data-bs-toggle="tab" style=" color: rgb(75, 73, 172);" >Basic Data</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Social-Data" class="nav-link" data-bs-toggle="tab" style=" color: rgb(75, 73, 172);">Social Data</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Health-Data" class="nav-link" data-bs-toggle="tab" style=" color: rgb(75, 73, 172);">Health Data</a>
                                </li>
                              <li class="nav-item">
                                    <a href="#Performance" class="nav-link" data-bs-toggle="tab" style=" color: rgb(75, 73, 172);"> Performance</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Basic-Data">
                                    <div class="form-1">
                                      <img src="images/avatar2.jpg" style="width: 10%; margin-bottom: 20px;">
                                      <div class="table-responsive">
                                        <table class="table  table-striped ">
                                          
                                          <tbody>
                                            <tr>
                                                <th scope="row">Name:</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ssn:</th>
                                                <td>123</td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row">Contury:</th>
                                                <td>Egypt</td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row">Birth Date:</th>
                                                <td colspan="2">12/2/2004</td>
                                             
                                            </tr>
                                            <tr>
                                                <th scope="row">Gender:</th>
                                                <td colspan="2">Male</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">Educational Stage:</th>
                                                <td colspan="2">#</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">Level:</th>
                                                <td colspan="2">#</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">town:</th>
                                                <td colspan="2">#</td>
                                                
                                              </tr>
                                            
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Social-Data"  >
                                    <div class="form-2">
                                        
                                       
                                          <div class="section" style="text-align: center; font-weight: bold;">Father Information</div>
                                          <div class="inner-wrap">
                                            <table  class="table table-striped" >
                                          
                                              <tbody>
                                                <tr>
                                                  <th scope="row">Name:</th>
                                                  <td>Ali</td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Job:</th>
                                                  <td>Doctor </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Father's Presence:</th>
                                                  <td>Alive</td>
                                                  
                                                </tr>
                                                
                                              </tbody>
                                            </table>
                                          </div>
                                      
                                          <div class="section" style="text-align: center; font-weight: bold;">Mother Information</div>
                                          <div class="inner-wrap">
                                            <table  class="table table-striped">
                                          
                                              <tbody>
                                                <tr>
                                                  <th scope="row">Name:</th>
                                                  <td>#</td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Job:</th>
                                                  <td>#</td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">Mother's Presence:</th>
                                                  <td>#</td>
                                                  
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
                                              <table  class="table  table-striped table-bordered">
                                      
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">chronic disease:</th>
                                                    <td>*</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">disease degree:</th>
                                                    <td>**</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Height:</th>
                                                    <td>160</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">weight:</th>
                                                    <td>50</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Distinctive physical characteristics:</th>
                                                    <td>***</td>
                                                    
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                                
                                            </div>
                                        
                                            <div class="section"></div>
                                            
                                        
                                            
                                            
                                        </form>
                                        </div>
                                    
                                </div>
                              <div class="tab-pane fade " id="Performance">
                              <div class="form-4" style="height: 400px;">
                                <div>
                                <select id='se' 
                                style="margin-top: 20px; padding: 3px;
                                margin: 20px;
                                 -webkit-appearance: none;
                                -moz-appearance: none;
                            appearance: none;
                            /* height: 57px; */
                            padding: 12px 20px 15px 16px;
                            text-align: center;
                            background-size: 10px;
                            transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
                            border: 1px solid #ddd;
                            border-radius: 14px;">
                                
                                
                                    <option>Choose semester</option>
                                    <option value="first">First semester</option>
                                    <option value="second">Second semster</option>
                                    
                                </select>
                              </div>
                            <div class="b" id="box" >

                              <div class="table table-bordered">
                                <table class="table" style="padding: 40px;" >
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th>First Month</th>
                                      <th>Second Month</th>
                                      <th>Third Month</th>
                                      <th> Oral</th>
                                      <th> Practical</th>
                                      <th>Final</th>
                                      <th>Behavior</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        
                                      <td>Math</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>9</td>
                                      <td>50</td>
                                      <td>  </td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Arabic</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>9</td>
                                      <td> </td>
                                      <td>50</td>
                                      <td>  </td>
                                      </tr>
                                      <tr>
                                        
                                        <td>English</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>9</td>
                                        <td>50</td>
                                        <td>  </td>
                                      </tr>
                                    <tr>
                                        
                                        <td>Science</td>
                                        <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>9</td>
                                      <td>50</td>
                                      <td>Makes a fight in class  </td>
                                      </tr>
                                      
                                      
                                    </tr>
                                   
                                     
                                  </tbody>
                                </table>
                              </div>
                              <div class="b2" id="box1" style="display: none; margin-top: 20px; ">
                                <table  class="table ">
                                  <thead>
                                    <tr>
                                      <td> Activity</td>
                                      <td>Performance</td>
                                      <td>Behavior</td>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Football</td>
                                      <td>10</td>
                                      <td>Makes a fight in class</td>
                                    </tr>
                                  </tbody>
                                </table>
                              
                              </div>
                            
                              
                            
                             
                            
                              <!-- <select id="activity1"style="margin-top: 20px; padding: 3px;
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
                                <option>choose activity</option>
                                <option value="football1">Football</option>
                                <option value="vollyball1">Vollyball</option>
                                <option value="tennis1">Tennis</option>
                                
                              </select> -->
                            
                              <!-- <div class="b2" id="box2" style="display: none; margin-top: 10px; ">
                              <table  class="table ">
                                <thead>
                                  <tr>
                                    <td>Performance</td>
                                    <td>Behavior</td>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>10</td>
                                    <td>Makes a fight in class</td>
                                  </tr>
                                </tbody>
                              </table>
                            
                            </div> -->
                            
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
              <!-- <div class="card">
                <div class="row">
                  <div class="col-md-6">
                 
                
                  </div>
                </div>
              </div> -->
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
  <script src="js/show.js"></script>
  
  
  <!-- endinject -->
</body>

</html>
