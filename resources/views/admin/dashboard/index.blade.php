@extends('layouts.default')

@section('content')
    <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-braille" style="color:#1976d2"></i>&nbsp Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
<div class="container bootstrap snippets bootdey">
  <div class="row">
    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Employee's List</div>
                <div class="circle-tile-number text-faded ">{{$employees}}</div> 
          <a class="circle-tile-footer" href="{{ route('employee.employees')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Elective </div>
                <div class="circle-tile-number text-faded ">{{$electives}}</div>
          <a class="circle-tile-footer" href="{{ route('employees.electives')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
     
    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading blue "><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content blue">
          <div class="circle-tile-description text-faded"> Permanent </div>
          <div class="circle-tile-number text-faded ">{{ $permanent }}</div>
          <a class="circle-tile-footer" href="{{ route('employees.permanent')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
</div>
</div>   

<div class="container bootstrap snippets bootdey">
  <div class="row">
    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content green">
          <div class="circle-tile-description text-faded"> Casual </div>
                <div class="circle-tile-number text-faded ">{{ $casual }}</div> 
          <a class="circle-tile-footer" href="{{ route('employees.casual')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading gray"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content gray">
          <div class="circle-tile-description text-faded"> Job Order </div>
                <div class="circle-tile-number text-faded ">{{ $joborder }}</div>
          <a class="circle-tile-footer" href="{{ route('employees.joborder')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
     
    <div class="col-lg-4 col-sm-8">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading purple "><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content purple">
          <div class="circle-tile-description text-faded"> Co-Terminus </div>
          <div class="circle-tile-number text-faded ">{{ $coterminous }}</div>
          <a class="circle-tile-footer" href="{{ route('employees.coterminous')}}">View Details <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
</div>
</div> 

<style type="text/css">
    .circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

</style>

@endsection