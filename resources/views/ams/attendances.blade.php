
    @extends('layouts.default')

@section('content')

<body>

            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12" style="margin-top: 10px; margin-bottom: 10px;   width: 3000px;">
                       <!--  <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="http://hrsystem-ci.test\/attendance/Save_Attendance" class="text-white"><i class="" aria-hidden="true"></i> Add Attendance </a></button> -->
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="#" class="text-white" data-toggle="modal" data-target="#Bulkmodal"><i class="" aria-hidden="true" style=" "></i>  IMPORT .DAT FILE </a></button>
                        
                        <!--  <input id="attendance" style="margin-left:80%; " type="text" placeholder="search" > -->



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
                                    <table id="attendance tbody" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>

                                                <th>Biometric No.</th>
                                               <th>Date </th>
                                                <th>Am In</th>
                                                <th>Am Out</th>
                                                <th>Pm In</th>
                                                <th>Pm Out</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="attendance">
                                           @if(isset($attendance))
                                                @foreach($attendance as $attendancelist)
                                                    <tr>
                                                        <td><mark>{{$attendancelist->biometric}}</mark></td>
                                                        <td>{{$attendancelist->date}}</td>
                                                        <td>{{$attendancelist->am_in}}</td>
                                                        <td>{{$attendancelist->am_out}}</td>
                                                        <td>{{$attendancelist->pm_in}}</td>
                                                        <td>{{$attendancelist->pm_out}}</td>
                    
                                                        <!-- <td class="jsgrid-align-center ">
                                                            <a href="Save_Attendance?A=1014" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                        </td> -->
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    <div class="container mt-4">
                                        {{ $attendance->links('vendor.pagination.bootstrap-4') }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Bulkmodal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                           <form method="post" action="{{ route('importcsv') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Add Attendance</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <!-- <h4>Import CSV File<span><img src="/public/assets/images/finger.jpg" height="100px" width="100px" margin-left="5px"></span>Upload only CSV file</h4> -->
                                    <h2>Import .DAT File </h2> <h4><p style="color:red">(Upload only .DAT file)</p></h4>
                                    <!-- <h4>Import CSV File<span><img src="http://hrsystem-ci.test\/assets/images/finger.jpg" height="100px" width="100px" margin-left="5px"></span>Upload only CSV file</h4> -->
                                    <input type="file" name="datFile" id="csv_file" accept=".dat"><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success waves-effect">Save</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>                             
            </div>

            <footer class="footer"> © 2023 | Developed By 404 Team </footer>

        </div>

    </div>

   <!--  <script>
    $(document).ready(function(){
      $("#attendance").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#attendance tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > - 1)
        });
      });
    });
    </script> -->
    

    <!-- <script type="text/javascript">
        $(function () {
            $('.mydatetimepicker').datepicker({
            format: "mm-yyyy",
            viewMode: "years", 
            minViewMode: "months"   
            });
        });
        $(function () {
            $('.mydatetimepickerFull').datepicker({
            format: "yyyy-mm-dd"   
            });
        });
    </script>      
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });        
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });



    
    $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
  
    $(".select2").select2();
    </script>
   <!--  <script src="http://hrsystem-ci.test\/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script> -->

 -->

@endsection