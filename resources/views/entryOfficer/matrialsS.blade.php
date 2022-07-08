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


                                                                    <!----------------------------------------------------------- *********************matrial****************** ----------------------------------------------------------------------------------->
                                                                    <div class="b1" id="box00" style="margin-top: 25px;">
                                                                        <table class="table table-bordered" style="width:100%; height: 60px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="header-label">Id </td>
                                                                                    <td class="header-label">Students Names</td>

                                                                                      <form action="{{route('e.gradesS',$id)}}" method="POST">
                                                                                        @csrf

                                                                                    @foreach($d4 as $dd4)
                                                                                    {{-- <td class="header-label">{{$dd3['MaterialName']}}</td> --}}
                                                                                    <td class="header-label">
                                                                                        <div><input type="text" value="{{$dd4['MaterialName']}}" readonly name="matrails[]"></div>
                                                                                    </td>
                                                                                    @endforeach

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($d2 as $dd2)
                                                                                <tr class="tr-inputs">
                                                                                    <td scope="row">
                                                                                        <div><input type="text" value="{{$dd2['id']}}" readonly name="stuid[]"></div>
                                                                                    </td>
                                                                                    <td class="col-md-4">
                                                                                        <div><input type="text" value="{{$dd2['Name']}}" readonly name="stuname[]"></div>
                                                                                    </td>
                                                                                    {{-- <td class="col-md-4">{{$dd1['Name']}}</td> --}}
                                                                                    @foreach($d4 as $dd4)
                                                                                    <td>
                                                                                        <div>
                                                                                            <input type="number" name="score[]"
                                                                                            @foreach($d6 as $dd6)
                                                                                             @if (($dd2['Name']==$dd6['Name'])&&($dd4['MaterialName']==$dd6['MaterialName']))
                                                                                             value="{{$dd6['Score']}}"
                                                                                             @break
                                                                                             @endif
                                                                                            @endforeach
                                                                                            min="0"
                                                                                            @foreach($d6 as $dd6)
                                                                                            @if ($dd4['MaterialName']==$dd6['MaterialName'])
                                                                                            max="{{$dd6['totalScore']}}"
                                                                                            @break
                                                                                            @endif
                                                                                           @endforeach
                                                                                            >
                                                                                    </div>
                                                                                    </td>
                                                                                    @endforeach

                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        <input type="submit"  class="btn btn-success"  name="additem">
                                                                        </form>
                                                                    </div>
                                                                    <!----------------------------------------------------------- *********************end matrial****************** ----------------------------------------------------------------------------------->

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
