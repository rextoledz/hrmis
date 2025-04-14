@extends('layouts.default')

@section('content')
 <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="http://hrsystem-ci.test\/attendance/Save_Attendance" class="text-white"><i class="" aria-hidden="true"></i> Add Attendance </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="#" class="text-white" data-toggle="modal" data-target="#Bulkmodal"><i class="" aria-hidden="true"></i>  Add Bulk Attendance</a></button>
                       <!--  <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="http://hrsystem-ci.test\/attendance/Attendance_Report" class="text-white"><i class="" aria-hidden="true"></i> Attendance Report </a></button> -->
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Attendance List  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="attendance123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Date </th>
                                                <th>Sign In</th>
                                                <th>Sign Out</th>
                                                <th>Working Hour</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Date </th>
                                                <th>Sign In</th>
                                                <th>Sign Out</th>
                                                <th>Working Hour</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                                                                       <tr>
                                                <td><mark>Will Williams</mark></td>
                                                <td>123456</td>
                                                <td>2021-12-01</td>
                                                <td>09:00:00</td>
                                                <td>04:30:00</td>
                                                <td>4.5</td>
                                                <td class="jsgrid-align-center ">
                                                                                                    <a href="Save_Attendance?A=1014" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td><mark>John Greenwood</mark></td>
                                                <td>123444</td>
                                                <td>2021-12-29</td>
                                                <td>09:00:00</td>
                                                <td>03:00:00</td>
                                                <td>6.0</td>
                                                <td class="jsgrid-align-center ">
                                                                                                    <a href="Save_Attendance?A=1015" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td><mark>Liam Moore</mark></td>
                                                <td>6969</td>
                                                <td>2021-06-06</td>
                                                <td>09:00:00</td>
                                                <td>02:00:00</td>
                                                <td>7.0</td>
                                                <td class="jsgrid-align-center ">
                                                                                                    <a href="Save_Attendance?A=1013" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td><mark>Colin Smith</mark></td>
                                                <td>3008</td>
                                                <td>2021-12-28</td>
                                                <td>10:00:00</td>
                                                <td>03:23:00</td>
                                                <td>6.6</td>
                                                <td class="jsgrid-align-center ">
                                                                                                    <a href="Save_Attendance?A=1016" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td><mark>Emily Denn</mark></td>
                                                <td>6600</td>
                                                <td>2021-11-30</td>
                                                <td>10:00:00</td>
                                                <td>05:00:00</td>
                                                <td>5.0</td>
                                                <td class="jsgrid-align-center ">
                                                                                                    <a href="Save_Attendance?A=1019" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div id="Bulkmodal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <!--   <div class="modal-dialog">
                                        <div class="modal-content">
                                           <form method="post" action="import" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Add Attendance</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Import Attendance<span><img src="http://hrsystem-ci.test\/assets/images/finger.jpg" height="100px" width="100px"></span>Upload only CSV file</h4>
                                             
                                            <input type="file" name="csv_file" id="csv_file" accept=".csv"><br><br>
                                                                                        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success waves-effect">Save</button>
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div> -->
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>                             
            </div>
            
@endsection