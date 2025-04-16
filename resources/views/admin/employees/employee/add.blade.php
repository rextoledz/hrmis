@extends('layouts.default')

@section('content')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-university" aria-hidden="true"></i> Employee</h3>
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
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="{{route('employee.employees')}}" class="text-white"><i class="" aria-hidden="true"></i> Employee List</a></button>
                    </div>
                </div>
               <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Add New Employee<span class="pull-right " ></span></h4>
                            </div>
                                <br>
                                <div>
                                    <h3 style="padding-left: 20px;">Personal Background</h3>
                                </div>
                                <div class="card-body">
                                @include('layouts.partials.messages')
                                <form class="row" action="{{ route('employee.store') }}" method="post" id="formId" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Last Name </label>
                                        <input type="text" id="" name="lastname" class="form-control form-control-line" value="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control form-control-line"  required > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="text" id="" name="middlename" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                        <input type="text" id="" name="suffix" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place Of Birth </label>
                                        <input type="text" name="placeofbirth" id="dateofbirth" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Purok/Street</label>
                                        <input type="text" name="address" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Barangay</label>
                                        <input type="text" name="barangay" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Municipality</label>
                                        <input type="text" name="municipality" class="form-control form-control-line" value="" required > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="text" name="province" class="form-control form-control-line" value="" required > 
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label for="maritalstatus">Civil Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option value="">Select Civil Status</option>
                                            <option value="MARRIED">MARRIED</option>
                                            <option value="WIDOWED ">WIDOWED</option>
                                            <option value="SEPARATED">SEPARATED</option>
                                            <option value="DIVORCED">DIVORCED</option>
                                            <option value="SINGLE">SINGLE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Blood Type</label>
                                        <select name="bloodtype" class="form-control custom-select">
                                            <option>Select Blood Type</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mobile Number </label>
                                        <input type="text" name="contactnumber" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Person to Contact in Case of Emergency</label>
                                        <input type="text" name="persontocontact" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Contact Number of Contact Person</label>
                                        <input type="text" name="contact" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="text" name="personalemail" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="text" name="corporateemail" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>GSIS ID Number </label>
                                        <input type="text" name="gsis" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PAG-IBIG ID Number </label>
                                        <input type="text" name="pagibig" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Philhealth Number </label>
                                        <input type="text" name="philhealth" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>SSS Number </label>
                                        <input type="text" name="sss" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>TIN </label>
                                        <input type="text" name="tin" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>UMID</label>
                                        <input type="text" id="umid" name="umid" class="form-control" value=""> 
                                    </div><br>
                                    <br>
                                    <div class="col-md-12">
                                  <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Family Background</h3>
                                   </div>
                                    <br>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Lastname</label>
                                        <input type="text" name="spousesurname" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Firstname</label>
                                        <input type="text" id="" name="spousefirstname" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Middlename</label>
                                      <input type="text" id="" name="spousemiddlename" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                      <input type="text" id="" name="extension" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" id="example-email2" name="example-email" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employer/Business Name</label>
                                        <input type="text" name="businessname" id="example-email2" name="example-email" value="" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Business Address</label>
                                        <input type="text" name="businessaddress" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Telephone Number</label>
                                        <input type="text" name="telephone" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Name</label>
                                        <input type="text" name="fathersurname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Name</label>
                                        <input type="text" name="mothersurname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <br>
                        <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                           </div>
                                    <br>

<div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">Level</th>
              <th scope="col">Name of School</th>
              <th scope="col">Basic Education/Degree/Course</th>
              <th scope="col">Highest Level/Units Earned</th>
              <th scope="col">Year Graduated</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>
                Elementary
              </td>
              <td><input type="text" name="elementaryschool" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="elementarybasiceducation" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="elemhighestlevel" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="yeargradelementary" id="example-email2" class="form-control" value="" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Secondary</td>
              <td><input type="text" name="secondaryschool" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="secondarybasiceducation" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="secondhighestlevel" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="yeargradsecondary" id="example-email2" class="form-control" value="" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Vocational</td>
              <td><input type="text" name="vocationalschool" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="vocationalbasiceducation" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="vocationhighestlevel" id="example-email2" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="yeargradvocational" id="example-email2" class="form-control" value="" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>College</td>
             <td><input type="text" name="course" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="collegebasiceducation" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="highestlevel" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="yeargradcollege" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
            <td>Graduate Studies</td>
              <td><input type="text" name="graduatestudies" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="graduatestudiesbasiceducation" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="graduate" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
              <td><input type="text" name="yeargradstudies" id="example-email2" name="example-email" class="form-control" value="" placeholder=""></td>
            </tr>
            
          </tbody>
        </table>
    </div>
      
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                        <input type="text" name="csc" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Rating</label>
                                        <input type="text" name="rating" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date of Examination/Conferment </label>
                                        <input type="text" name="dateofexamination" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place of Examination </label>
                                        <input type="text" name="placeofexamination" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PRC - License Number </label>
                                        <input type="text" name="licensenumber" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Issuance-PRC ID </label>
                                        <input type="date" name="dateofissuance" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Validity-PRC ID </label>
                                        <input type="date" name="dateofvalidity" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Additional Certification (if any)</label>
                                        <input type="certification" name="certification" class="form-control" id="recipient-name1" value="">
                                    </div>
                                 <br>
                                <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Work Background</h3>
                           </div>
                                <br>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label>Personnel ID</label>
                                        <input type="text" name="personnel" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Biometric Number</label>
                                        <input type="text" name="biometric" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employment Status</label>
                                        <select name="status" class="form-control custom-select" required>
                                            <option>Select Status</option>
                                            <option value="PERMANENT">PERMANENT</option>
                                            <option value="CASUAL">CASUAL</option>
                                            <option value="JOB ORDER">JOB ORDER</option>
                                            <option value="CO-TERMINOUS">CO-TERMINOUS</option>
                                            <option value="ELECTIVE">ELECTIVE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Department</label>
                                        <select name="department" class="form-control custom-select" required>
                                            <option disabled selected>Select Department</option>
                                            <option value="Office of the Mayor">Office of the Mayor</option>
                                            <option value="Office of the Mayor - Bids and Awards Committee">Office of the Mayor - Bids and Awards Committee</option>
                                            <option value="Office of the Mayor - Bureau of Internal Revenue">Office of the Mayor - Bureau of Internal Revenue</option>
                                            <option value="Office of the Mayor - BOMWASA">Office of the Mayor - BOMWASA</option>
                                            <option value="Office of the Mayor - Commission on Elections">Office of the Mayor - Commission on Elections</option>
                                            <option value="Office of the Mayor - Department of the Interior and Local Government">Office of the Mayor - Department of the Interior and Local Government</option>
                                            <option value="Office of the Mayor - Motorpool">Office of the Mayor - Motorpool</option>
                                            <option value="Office of the Mayor - General Services Office">Office of the Mayor - General Services Office</option>
                                            <option value="Office of the Mayor - Human Resource Management Office">Office of the Mayor - Human Resource Management Office</option>
                                            <option value="Office of the Mayor - Municipal Tourism Office">Office of the Mayor - Municipal Tourism Office</option>
                                            <option value="Office of the Mayor - Municipal Environment and Natural Resources Office">Office of the Mayor - Municipal Environment and Natural Resources Office</option>
                                            
                                            <option value="Office of the Sangguniang Bayan">Office of the Sangguniang Bayan</option>
                                            <option value="Municipal Agricultural Services Office">Municipal Agricultural Services Office</option>
                                            <option value="Municipal Disaster Risk Reduction and Management Office">Municipal Disaster Risk Reduction and Management Office</option>
                                            
                                            <option value="Municipal Social Welfare and Development Office">Municipal Social Welfare and Development Office</option>
                                            <option value="Municipal Social Welfare and Development Office - 4Ps">Municipal Social Welfare and Development Office - 4Ps</option>
                                            <option value="Municipal Social Welfare and Development Office - KALAHI">Municipal Social Welfare and Development Office - KALAHI</option>
                                            <option value="Municipal Social Welfare and Development Office - Office of Senior Citizens Affairs (OSCA)">Municipal Social Welfare and Development Office - Office of Senior Citizens Affairs (OSCA)</option>
                                            
                                            <option value="Office of the Municipal Accountant">Office of the Municipal Accountant</option>
                                            <option value="Office of the Municipal Assessor">Office of the Municipal Assessor</option>
                                            <option value="Office of the Municipal Budget Officer">Office of the Municipal Budget Officer</option>
                                            <option value="Office of the Municipal Civil Registrar">Office of the Municipal Civil Registrar</option>
                                            <option value="Office of the Municipal Engineer">Office of the Municipal Engineer</option>
                                            <option value="Office of the Municipal Planning and Development Coordinator">Office of the Municipal Planning and Development Coordinator</option>
                                            <option value="Office of the Municipal Treasurer">Office of the Municipal Treasurer</option>
                                            <option value="Rural Health Unit">Rural Health Unit</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Position Title</label>
                                        <select name="position" class="form-control custom-select" required>
                                            <option value="">Select Position Title</option>
                                            <option value="MUNICIPAL MAYOR">Municipal Mayor</option>
                                            <option value="SENIOR ADMINISTRATIVE ASST. III (Private Secretary II)">Senior Administrative Asst. III (Private Secretary II)</option>
                                            <option value="ADMINISTRATIVE OFFICER IV (Human Resource Management Officer II)">Administrative Officer IV (Human Resource Management Officer II)</option>
                                            <option value="ADMINISTRATIVE OFFICER III (Supply Officer II)">Administrative Officer III (Supply Officer II)</option>
                                            <option value="INTERNAL AUDITOR I">Internal Auditor I</option>
                                            <option value="ADMINISTRATIVE AIDE V (Community Affairs Asst.)">Administrative Aide V (Community Affairs Asst.)</option>
                                            <option value="ADMINISTRATIVE ASST. II (Human Resource Management Assistant)">Administrative Asst. II (Human Resource Management Assistant)</option>
                                            <option value="ADMINISTRATIVE ASST. II (Market Inspector II)">Administrative Asst. II (Market Inspector II)</option>
                                            <option value="License Inspector II">License Inspector II</option>
                                            <option value="ADMINISTRATIVE ASST. I (Computer Operator I)">Administrative Asst. I (Computer Operator I)</option>
                                            <option value="ADMINISTRATIVE AIDE III (Plumber I)">Administrative Aide III (Plumber I)</option>
                                            <option value="ADMINISTRATIVE AIDE I (Laborer I)">Administrative Aide I (Laborer I)</option>
                                            <option value="TOURISM OPERATIONS OFFICER I">Tourism Operations Officer I</option>
                                            <option value="MEAT INSPECTOR I">Meat Inspector I</option>
                                            <option value="ADMINISTRATIVE OFFICER IV">Administrative Officer IV</option>
                                            <option value="ADMINISTRATIVE ASSISTANT VI (Computer Operator III)">Administrative Assistant VI (Computer Operator III)</option>
                                            <option value="EXECUTIVE ASSISTANT II">Executive Assistant II</option>
                                            <option value="LABOR AND EMPLOYMENT OFFICER III">Labor and Employment Officer III</option>
                                            <option value="MUN. VICE MAYOR">Mun. Vice Mayor</option>
                                            <option value="SANGGUNIANG BAYAD MEMBER">Sangguniang Bayad Member</option>
                                            <option value="SANGGUNIANG BAYAD MEMBER (ABC President)">Sangguniang Bayad Member (ABC President)</option>
                                            <option value="SANGGUNIANG BAYAD MEMBER (PPSK President)">Sangguniang Bayad Member (PPSK President)</option>
                                            <option value="SECRETARY TO THE SANGGUNIAN">Secretary to the Sangguniang</option>
                                            <option value="ADMINISTRATIVE AIDE VI (Clerk III)">Administrative Aide VI (Clerk III)</option>
                                            <option value="ADMINISTRATIVE AIDE III (Driver I)">Administrative Aide III (Driver I)</option>
                                            <option value="LOCAL LEGISLATIVE STAFF OFFICER I">Local Legislative Staff Officer I</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Planning and Development Coordinator)">Mun. Govt. Dept. Head I (Municipal Planning and Development Coordinator)</option>
                                            <option value="ENVIRONMENTAL MANAGEMENT SPECIALIST I">Environmental Management Specialist I</option>
                                            <option value="PLANNING ASSISTANT">Planning Assistant</option>
                                            <option value="ADMINISTRATIVE AIDE VI (Draftsman)">Administrative Aide VI (Draftsman)</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Budget Officer)">Mun. Govt. Dept. Head I (Municipal Budget Officer)</option>
                                            <option value="BUDGET OFFICER II">Budget Officer II</option>
                                            <option value="ADMINISTRATIVE ASST. II (Budgeting Assistant)">Administrative Asst. II (Budgeting Assistant)</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Accountant)">Mun. Govt. Dept. Head I (Municipal Accountant)</option>
                                            <option value="ACCOUNTANT II">Accountant II</option>
                                            <option value="ADMINISTRATIVE ASST. III (Senior Bookkeeper)">Administrative Asst. III (Senior Bookkeeper)</option>
                                            <option value="ADMINISTRATIVE AIDE VI (Accounting Clerk II)">Administrative Aide VI (Accounting Clerk II)</option>
                                            <option value="MUN. GOVT. DEPT.HEAD I (Municipal Treasurer I)">Mun. Govt. Dept. Head I (Municipal Treasurer I)</option>
                                            <option value="MUN. GOVT. ASST. DEPT.HEAD I (Assistant Municipal Treasurer)">Mun. Govt. Asst. Dept. Head I (Assistant Municipal Treasurer)</option>
                                            <option value="ADMINISTRATIVE AIDE IV (Clerk II)">Administrative Aide IV (Clerk II)</option>
                                            <option value="Revenue Collection Clerk III">Revenue Collection Clerk III</option>
                                            <option value="ADMINISTRATIVE ASST. I (Rev. Coll. Clerk II)">Administrative Asst. I (Rev. Coll. Clerk II)</option>
                                            <option value="ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)">Administrative Aide V (Rev. Coll. Clerk I)</option>
                                            <option value="Revenue Collection Clerk I">Revenue Collection Clerk I</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Assessor)">Mun. Govt. Dept. Head I (Municipal Assessor)</option>
                                            <option value="ADMINISTRATIVE ASST. III (Assessment Clerk III)">Administrative Asst. III (Assessment Clerk III)</option>
                                            <option value="ADMINISTRATIVE AIDE VI (Assessment Clerk II)">Administrative Aide VI (Assessment Clerk II)</option>
                                            <option value="Assessment Clerk I">Assessment Clerk I</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Health Officer)">Mun. Govt. Dept. Head I (Municipal Health Officer)</option>
                                            <option value="NURSE II">Nurse II</option>
                                            <option value="MIDWIFE III">Midwife III</option>
                                            <option value="MIDWIFE II">Midwife II</option>
                                            <option value="MIDWIFE I">Midwife I</option>
                                            <option value="SANITARY INSPECTOR I">Sanitary Inspector I</option>
                                            <option value="MEDICAL TECHNOLOGIST II">Medical Technologist II</option>
                                            <option value="DRIVER I">Driver I</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Civil Registrar)">Mun. Govt. Dept. Head I (Municipal Civil Registrar)</option>
                                            <option value="REGISTRATION OFFICER II">Registration Officer II</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Social Welfare and Development Officer)">Mun. Govt. Dept. Head I (Municipal Social Welfare and Development Officer)</option>
                                            <option value="SOCIAL WELFARE OFFICER II">Social Welfare Officer II</option>
                                            <option value="Social Welfare Assistant">Social Welfare Assistant</option>
                                            <option value="DAY CARE WORKER I">Day Care Worker I</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Agriculturist)">Mun. Govt. Dept. Head I (Municipal Agriculturist)</option>
                                            <option value="AGRICULTURAL TECHNOLOGIST">Agricultural Technologist</option>
                                            <option value="AGRICULTURAL TECHNICIAN II">Agricultural Technician II</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (Municipal Engineer)">Mun. Govt. Dept. Head I (Municipal Engineer)</option>
                                            <option value="ENGINEER II">Engineer II</option>
                                            <option value="ADMINISTRATIVE AIDE III (Clerk I)">Administrative Aide III (Clerk I)</option>
                                            <option value="ADMINISTRATIVE AIDE III (Laborer II)">Administrative Aide III (Laborer II)</option>
                                            <option value="ADMINISTRATIVE AIDE VI (MECHANIC II)">Administrative Aide VI (Mechanic II)</option>
                                            <option value="MUN. GOVT. DEPT. HEAD I (LDRRMO)">Mun. Govt. Dept. Head I (LDRRMO)</option>
                                            <option value="LOCAL DISASTER RISK REDUCTION MANAGEMENT OFFICER II (LDRRMO II)">Local Disaster Risk Reduction Management Officer II (LDRRMO II)</option>
                                            <option value="LOCAL DISASTER RISK REDUCTION MANAGEMENT ASSISTANT (LDRRMA)">Local Disaster Risk Reduction Management Assistant (LDRRMA)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Joining</label>
                                        <input type="date" name="dateofjoining" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Leaving </label>
                                        <input type="date" name="dateofleaving" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Mandatory Retirement</label>
                                        <input type="date" name="dateofretirement" class="form-control" id="recipient-name1" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Salary Grade</label>
                                        <select name="salary" class="form-control custom-select" required>
                                            <option>Select Salary Grade</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label>Step</label>
                                        <select name="step" class="form-control custom-select" required>
                                            <option>Select Step</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <a href ="{{ route('employee.employees') }}"><button type="button"  class="btn btn-danger">Cancel</button></a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
