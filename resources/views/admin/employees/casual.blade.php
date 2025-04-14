@extends('layouts.default')

@section('content')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Personnel ID</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Employment Status</th>
                                                <th>Date of Joining</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($casualEmployees as $employee)
                                            <tr>
                                                <td>{{$employee->personnel}}</td>
                                                <td>{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }} {{ $employee->suffix}}</td>
                                                <td>{{$employee->department}}</td>
                                                <td>{{$employee->position}}</td>
                                                <td>{{$employee->status}}</td>
                                                <td>{{$employee->dateofjoining}}</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="{{ url('/employee/index/view/').'/'.$employee->id}}" title="View" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ url('/employee/index/edit/').'/'.$employee->id}}" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                             @endforeach 
                                     </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection