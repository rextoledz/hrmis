
@extends('layouts.default')

@section('content')
         
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
                
            <div class="row">
                <div class="col-12" >
                    <div class="card"style=" width: 100%;">
                        <div class="row-flex" style="display: flex;justify-content: flex-start;align-items: center;">
<!-- 
                            <div class="form-group col-md-3 m-t-20">
                                <label>Select Day</label>
                                <select name="dtr_day" class="form-control custom-select" required>
                                    @for($i=1; $i<=31; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div> -->

                            <div class="form-group col-md-3 m-t-20">
                                <label>Start Date</label>
                                <input type="date" class="form-control" id="datestarted">
                            </div>    
                            <div class="form-group col-md-3 m-t-20">
                                <label>End Date</label>
                                <input type="date" class="form-control" id="dateend">
                            </div>
                        </div>
                    </div>
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3 row" style="justify-content: center;align-content: center;">
                                    <h4 class="m-b-0"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                                </div>
                                <div class="col-md-4" style="padding-right: 5px;">
                                    <label>Search by:</label>
                                    <select name="dtr_year" id="filter" value="" class="custom-select" style="width:15em;" required>
                                        <option value="employee">Employees Name</option>
                                        <option value="department">Department</option>
                                    </select>
                                </div>
                                <div id="search-employees" class="col-md-5" style="padding-left: 5px; ">
                                    <input type="text" id="search" class="custom-search" placeholder="Search">
                                </div>
                                <div id="search-department" class="col-md-5" style="padding-left: 5px; display: none;">
                                    <select name="dtr_year" id="dpt" value="" class="form-control custom-select" required>
                                        <option>Select Department</option>
                                        <option value="Municipal Agricultural Services Office">Municipal Agricultural Services Office</option>
                                        <option value="Municipal Social Welfare & Development Office">Municipal Social Welfare & Development Office</option>
                                        <option value="Municipal Assessor's Office">Municipal Assessor's Office</option>
                                        <option value="Commision on Election">Commision on Election</option>
                                        <option value="Local Civil Registrar">Local Civil Registrar</option>
                                        <option value="Budget Office">Budget Office</option>
                                        <option value="BOMWASA AND BIR">BOMWASA AND BIR</option>
                                        <option value="Accounting Office">Accounting Office</option>
                                        <option value="PESO">PESO</option>
                                        <option value="Municipal Treasurer's Office">Municipal Treasurer's Office</option>
                                        <option value="Cogressman's Office">Congressman's Office</option>
                                        <option value="Human Resource Management Office">Human Resource Management Office</option>
                                        <option value="MPDC">MPDC</option>
                                        <option value="KALAHI">KALAHI</option>
                                        <option value="Office of the Sangguniang Bayan">Office of the Sangguniang Bayan</option>
                                        <option value="Office of the Vice-Mayor">Office of the Vice-Mayor</option>
                                        <option value="Office of the Mayor">Office of the Mayor</option>
                                        <option value="Engineering Office">Engineering Office</option>
                                        <option value="MENRO">MENRO</option>
                                        <option value="Tourism">Tourism</option>
                                        <option value="Rural Health Unit">Rural Health Unit</option>
                                        <option value="DILG">DILG</option>
                                        <option value="MDRR">MDRR</option>
                                        <option value="GSO">GSO</option>
                                        <option value="DSWD">DSWD</option>
                                        <option value="Department of Trade and Industry">Department of Trade and Industry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Biometric No.</th>
                                            <th>Personnel ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Number </th>
                                            <th>Employee Status</th>
                                            <th>Department</th>
                                            <th >Action</th>

                                        </tr>
                                    </thead>
                                    <tbody id="tblData">
                                        @if(isset($employees))
                                            @foreach($employees as $employee)
                                                 <tr>
                                                    <td>{{ $employee->biometric }}</td>
                                                    <td>{{ $employee->personnel }}</td>
                                                    <td>{{ $employee->lastname }}, {{ $employee->firstname }} {{ $employee->middlename }}</td>
                                                    <td>{{ $employee->contactnumber }}</td>
                                                    <td>{{ $employee->status }}</td>
                                                    <td>{{ $employee->department }}</td>
                                                    <td class="jsgrid-align-center ">
                                                        <button data-url="{{ url('/printdtralt/').'/'.$employee->biometric }}" title="print" class="btn btn-sm btn-primary waves-effect waves-light printdtr"><i class="fa fa-print"></i> </button>
                                                    </td>
                                               </tr>
                                            @endforeach
                                       @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">   </footer>
            <style>
                .custom-search{
                    width: 100%;
                    height: 100%;
                    border: none;
                    border-bottom: 1px solid #cccbca;
                }
                .custom-search::placeholder{
                    color: #cccbca;
                }
                .custom-search:focus{
                    border-bottom-color: #0aa8fc;
                }
            </style>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                  var currentDate = new Date().toISOString().split('T')[0]; // Get current date in "YYYY-MM-DD" format
                  $('#datestarted').val(currentDate); // Set the value of the input field to the current date
                  $('#dateend').val(currentDate); // Set the value of the input field to the current date
                });


                var employees = @json($employees);
                $('.printdtr').on('click', function(e){
                    var link = $(this).attr('data-url');
                    var datestarted = $('#datestarted').val();
                    var dateend = $('#dateend').val();
                    url = link+'/'+datestarted+'/'+dateend;
                    console.log(url);
                    var newWindow = window.open(url, '_blank');
                    newWindow.onload = function() {
                        newWindow.print();
                    };
                });
                function printDTR(data,bio){

                    var link = data.getAttribute('data-url');//get the url
                    var month = $('select[name="dtr_month"]').val();
                    var year = $('select[name="dtr_year"]').val();
                    url = link+'/'+bio+'/'+month+'/'+year;
                    console.log(url);
                    var newWindow = window.open(url, '_blank');
                    newWindow.onload = function() {
                        newWindow.print();
                    };
                }

                $('#filter').change(function(){
                    console.log($('#filter').val());
                    var slc = $('#filter').val();
                    if(slc == "department"){
                        $('#search-employees').hide();
                        $('#search-department').show(500);                       
                    }else{
                        $('#search-department').hide();
                        $('#search-employees').show(500);
                    }
                });

                $('#search-department').change(function(){
                    let dpt = $('#dpt').val();

                    $.ajax({
                        url: "{{ route('searchByDpt') }}",
                        type: "GET",
                        data: { dpt: dpt},
                        dataType: "json",
                        success: function (response) {
                            updateTable(response.data);
                        },
                        error: function (error) {
                            console.error('Error fetching data:', error);
                        }
                    });
                });

               $('#search-employees').on("input", function(){
                    var search = $('#search').val().toLowerCase();
                    if(search != ""){
                        var searchResults = $.grep(employees, function(employee) {
                        // Search for the searchTerm in both firstname and lastname (case-insensitive)
                            return (
                                employee.firstname.toLowerCase().includes(search.toLowerCase()) ||
                                employee.lastname.toLowerCase().includes(search.toLowerCase())
                            );
                        });
                        updateTable(searchResults);
                    }
                });


                function updateTable(data) {
                    var tableData = $('#tblData');
                    tableData.empty();
                    var html = "";
                    var row = data.length;
                    if(row === 0){
                        html = '<tr style="text-align:center">';
                        html += '<td colspan="7">No matching record found!</td>';
                        html += '</tr>';
                        tableData.append(html);
                    }else{
                        // Update the UI with the fetched data
                        $.each(data, function (index, item) {
                            html = '<tr>';
                            let mName = item.middlename ? item.middlename : '';
                            console.log(item.lastname +', '+item.firstname+' '+mName[0]);
                            html += "<td>"+item.lastname +', '+item.firstname+' '+mName[0]+".</td>";
                            html += "<td>"+item.personnel+"</td>";
                            html += "<td>"+item.personalemail+"</td>";
                            html += "<td>"+item.contactnumber+"</td>";
                            html += "<td>"+item.biometric+"</td>";
                            html += "<td>"+item.status+"</td>";
                            html += "<td>"+item.department+"</td>";
                            html += '<td class="jsgrid-align-center ">';
                            html += '<button data-url="'+"{{ url('/printdtr/') }}"+'" title="print" class="btn btn-sm btn-primary waves-effect waves-light" onclick="printDTR(this,'+item.biometric+')"><i class="fa fa-print"></i> </button>';
                            html += '</td>';
                            html += '</tr>';
                            tableData.append(html);
                        });
                    }
                    
                }
            </script>

@endsection
