@extends('entryOfficer.layout')
@section('content')


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('entry.home')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false" aria-controls="primary">
            <i class="icon-head menu-icon"></i>
          <span class="menu-title">primary</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="primary">
          <ul class="nav flex-column sub-menu">
            @foreach($p as $pp)
            <li class="nav-item"> <a class="nav-link" href="{{route('e.l1',$pp['id'])}}" >{{$pp['id']}}</a></li>
            @endforeach
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false" aria-controls="middle">
            <i class="icon-head menu-icon"></i>
          <span class="menu-title">middle</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="middle">
          <ul class="nav flex-column sub-menu">
            @foreach($pre as $ppre)
            <li class="nav-item"> <a class="nav-link" href="{{route('e.l1',$ppre['id'])}}" >{{$ppre['id']}}</a></li>
            @endforeach
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false" aria-controls="secondary">
            <i class="icon-head menu-icon"></i>
          <span class="menu-title">secondary</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="secondary">
          <ul class="nav flex-column sub-menu">
            @foreach($sec as $ssec)
            <li class="nav-item"> <a class="nav-link" href="{{route('e.l1',$ssce['id'])}}" >{{$ssec['id']}}</a></li>
            @endforeach
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


<!----------------------------------------------------------- *********************behavior****************** ----------------------------------------------------------------------------------->
                                                                    <div class="b5" id="box4" >
                                                                        <div  style="margin-right:0px ;">
                                                                            <div class="row" style="margin-left:370px ;">
                                                                                <div class="col-md-15">
                                                                                    <div class="input-group mb-4" >

                                                                                        <form action="{{route('e.behaviorF1',$id)}}" method="POST">
                                                                                            @csrf

                                                                                        <input type="text" class="form-control input-text" placeholder="Search student...." aria-label="Recipient's username" aria-describedby="basic-addon2" name="studentid" >
                                                                                        <div class="input-group-append"><input class="btn btn-outline-primary btn-sm" type="submit" name="btnsubmit" >
                                                                                        </div>
                                                                                    </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        @if (isset($_POST['studentid']))
                                                                        @foreach($d1 as $dd1)
                                                                        @if ($dd1!==null)

                                                                        <table class="table table-bordered" style="width:100%; height: 60px; ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="header-label" style="width:6%">id</td>
                                                                                    <td class="header-label" style="width:32%">Students Names</td>
                                                                                    <td class="header-label" style="width:62%">behavior</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                <form action="{{route('e.searchF',$id)}}" method="POST">
                                                                                    @csrf

                                                                                <tr class="tr-inputs">

                                                                                    @foreach($d1 as $dd1)
                                                                                    <td scope="row">
                                                                                        <div><input type="text" value="{{$dd1['id']}}" readonly name="stuid"></div>
                                                                                    </td>
                                                                                    <td class="col-md-4">
                                                                                        <div><input type="text" value="{{$dd1['Name']}}" readonly name="stuname"></div>
                                                                                    </td>
                                                                                    @endforeach

                                                                                    <td style="display: flex; width: 100%;"  >
                                                                                        <div style="padding-left: -60px; margin-left: 0.5rem; margin-top: 0.2rem; "  >
                                                                                            <div class="form-check" >
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rb1" value="good">
                                                                                                {{-- <label class="form-check-label" for="flexRadioDefault3" style="margin-left: 0.1rem;" >good</label> --}}
                                                                                            </div>
                                                                                                <div class="form-check" >
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rb1" value="bad">
                                                                                               {{--  <label class="form-check-label" for="flexRadioDefault4" style="margin-left: 0.1rem;" >bad</label> --}}

                                                                                            </div>
                                                                                        </div>

                                                                                            <div class="w-80" style="margin-left: 1rem; margin-top: 0.7rem; margin-bottom: 0.7rem;" id=rb2>
                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="30" name="description" ></textarea>
                                                                                            </div>

                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <input type="submit"  class="btn btn-success"  name="additem">
                                                                    </form>
                                                                        @endif
                                                                        @endforeach
                                                                        @endif
                                                                    </div>
<!----------------------------------------------------------- *********************end behavior****************** ----------------------------------------------------------------------------------->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Premium <a href="#" >Student Performance Tracking System</a>  All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>

            @endsection

