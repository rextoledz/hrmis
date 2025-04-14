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
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Update Employee<span class="pull-right " ></span></h4>
                            </div>

                                <br>
                                <div>
                                    <h3 style="padding-left: 20px;">Personal Background</h3>
                                </div>
                                                                                          
                                <div class="card-body">
                                @include('layouts.partials.messages')
                                <form class="row" action="{{ route('employee.edit.store', $employee->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Last Name </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="lastname" class="form-control" id="recipient-name1" value="{{$employee->lastname}}" required> 
                                    </div>
                                   <div class="form-group col-md-4 m-t-20">
                                        <label>First Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="firstname" class="form-control" id="recipient-name1" value="{{$employee->firstname}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="middlename" class="form-control" id="recipient-name1" value="{{$employee->middlename}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="suffix" class="form-control" id="recipient-name1" value="{{$employee->suffix}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="{{$employee->dateofbirth}}" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place Of Birth </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="placeofbirth" id="dateofbirth" class="form-control" value="{{$employee->placeofbirth}}" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Purok/Street</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="address" class="form-control" id="recipient-name1" value="{{$employee->address}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Barangay</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="barangay" class="form-control" id="recipient-name1" value="{{$employee->barangay}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Municipality</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="municipality" class="form-control form-control-line" value="{{$employee->municipality}}" required > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="province" class="form-control form-control-line" value="{{$employee->province}}" required > 
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label for="maritalstatus">Civil Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option value="">Select Civil Status</option>
                                            <option value="MARRIED" {{ $employee->maritalstatus === 'MARRIED' ? 'selected' : '' }}>MARRIED</option>
                                            <option value="WIDOWED" {{ $employee->maritalstatus === 'WIDOWED' ? 'selected' : '' }}>WIDOWED</option>
                                            <option value="SEPARATED" {{ $employee->maritalstatus === 'SEPARATED' ? 'selected' : '' }}>SEPARATED</option>
                                            <option value="DIVORCED" {{ $employee->maritalstatus === 'DIVORCED' ? 'selected' : '' }}>DIVORCED</option>
                                            <option value="SINGLE" {{ $employee->maritalstatus === 'SINGLE' ? 'selected' : '' }}>SINGLE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="MALE" {{ $employee->gender === 'MALE' ? 'selected' : '' }}>MALE</option>
                                            <option value="FEMALE" {{ $employee->gender === 'FEMALE' ? 'selected' : '' }}>FEMALE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Blood Group</label>
                                        <select name="bloodtype" class="form-control custom-select">
                                            <option>Select Blood Group</option>
                                            <option value="O+" {{ $employee->bloodtype === 'O+' ? 'selected' : '' }}>O+</option>
                                            <option value="O-" {{ $employee->bloodtype === 'O-' ? 'selected' : '' }}>O-</option>
                                            <option value="A+" {{ $employee->bloodtype === 'A+' ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ $employee->bloodtype === 'A-' ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ $employee->bloodtype === 'B+' ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ $employee->bloodtype === 'B-' ? 'selected' : '' }}>B-</option>
                                            <option value="AB+" {{ $employee->bloodtype === 'AB+' ? 'selected' : '' }}>AB+</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mobile Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contactnumber" class="form-control" id="recipient-name1" value="{{$employee->contactnumber}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Person to Contact in Case of Emergency</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="persontocontact" class="form-control" value="{{$employee->persontocontact}}" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Contact Number of Contact Person</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contact" class="form-control" value="{{$employee->contact}}" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="personalemail" class="form-control" id="recipient-name1" value="{{$employee->personalemail}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="corporateemail" class="form-control" id="recipient-name1" value="{{$employee->corporateemail}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>GSIS ID Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="gsis" class="form-control" id="recipient-name1" value="{{$employee->gsis}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PAG-IBIG ID Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="pagibig" class="form-control" id="recipient-name1" value="{{$employee->pagibig}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Philhealth Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="philhealth" class="form-control" id="recipient-name1" value="{{$employee->philhealth}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>SSS Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="sss" class="form-control" id="recipient-name1" value="{{$employee->sss}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>TIN</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="tin" class="form-control" id="recipient-name1" value="{{$employee->tin}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>UMID</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="umid" class="form-control" id="recipient-name1" value="{{$employee->umid}}">
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                  <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Family Background</h3>
                                   </div>
                                    <br>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Lastname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="spousesurname" class="form-control form-control-line" value="{{$employee->spousesurname}}" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Firstname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" id="" name="spousefirstname" class="form-control form-control-line" value="{{$employee->spousefirstname}}" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Middlename</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                      <input type="text" id="" name="spousemiddlename" class="form-control form-control-line" value="{{$employee->spousemiddlename}}"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                      <input type="text" id="" name="extension" class="form-control form-control-line" value="{{$employee->extension}}"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Occupation</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="occupation" id="example-email2" name="example-email" class="form-control" value="{{$employee->occupation}}" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employer/Business Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="businessname" id="example-email2" name="example-email" value="{{$employee->businessname}}" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Business Address</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="businessaddress" id="example-email2" name="example-email" class="form-control" value="{{$employee->businessaddress}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Telephone Number</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="telephone" id="example-email2" name="example-email" class="form-control" value="{{$employee->telephone}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="fathersurname" id="example-email2" name="example-email" class="form-control" value="{{$employee->fathersurname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="mothersurname" id="example-email2" name="example-email" class="form-control" value="{{$employee->mothersurname}}" placeholder="">
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
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="elementaryschool" id="example-email2" name="example-email" class="form-control" value="{{$employee->elementaryschool}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="elementarybasiceducation" id="example-email2" name="example-email" class="form-control" value="{{$employee->elementarybasiceducation}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="elemhighestlevel" id="example-email2" name="example-email" class="form-control" value="{{$employee->elemhighestlevel}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="yeargradelementary" id="example-email2" name="example-email" class="form-control" value="{{$employee->yeargradelementary}}"></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Secondary</td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="secondaryschool" id="example-email2" name="example-email" class="form-control" value="{{$employee->secondaryschool}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="secondarybasiceducation" id="example-email2" name="example-email" class="form-control" value="{{$employee->secondarybasiceducation}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="secondhighestlevel" id="example-email2" name="example-email" class="form-control" value="{{$employee->secondhighestlevel}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="yeargradsecondary" id="example-email2" name="example-email" class="form-control" value="{{$employee->yeargradsecondary}}" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Vocational</td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="vocationalschool" id="example-email2" name="example-email" class="form-control" value="{{$employee->vocationalschool}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="vocationalbasiceducation" id="example-email2" name="example-email" class="form-control" value="{{$employee->vocationalbasiceducation}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="vocationhighestlevel" id="example-email2" name="example-email" class="form-control" value="{{$employee->vocationhighestlevel}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="yeargradvocational" id="example-email2" name="example-email" class="form-control" value="{{$employee->yeargradvocational}}" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>College</td>
             <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="course" id="example-email2" name="example-email" class="form-control" value="{{$employee->course}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="collegebasiceducation" id="example-email2" name="example-email" class="form-control" value="{{$employee->collegebasiceducation}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="highestlevel" id="example-email2" name="example-email" class="form-control" value="{{$employee->highestlevel}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="yeargradcollege" id="example-email2" name="example-email" class="form-control" value="{{$employee->yeargradcollege}}" placeholder=""></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
            <td>Graduate Studies</td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="graduatestudies" id="example-email2" name="example-email" class="form-control" value="{{$employee->graduatestudies}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="graduatestudiesbasiceducation" id="example-email2" name="example-email" class="form-control" value="{{$employee->graduatestudiesbasiceducation}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="graduate" id="example-email2" name="example-email" class="form-control" value="{{$employee->graduate}}" placeholder=""></td>
              <td><input type="hidden" name="id" value="{{$employee->id}}"><input type="text" name="yeargradstudies" id="example-email2" name="example-email" class="form-control" value="{{$employee->yeargradstudies}}" placeholder=""></td>
            </tr>
            
          </tbody>
        </table>
      </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                      <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="csc" class="form-control" id="recipient-name1" value="{{$employee->csc}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Rating</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="rating" class="form-control" id="recipient-name1" value="{{$employee->rating}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date of Examination/Conferment </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofexamination" class="form-control" id="recipient-name1" value="{{$employee->dateofexamination}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place of Examination </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="placeofexamination" class="form-control" id="recipient-name1" value="{{$employee->placeofexamination}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PRC - License Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="licensenumber" class="form-control" id="recipient-name1" value="{{$employee->licensenumber}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Issuance-PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="dateofissuance" class="form-control" id="recipient-name1" value="{{$employee->dateofissuance}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Validity-PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="dateofvalidity" class="form-control" id="recipient-name1" value="{{$employee->dateofvalidity}}">
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
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="personnel" class="form-control" id="recipient-name1" value="{{$employee->personnel}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Biometric Number</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="biometric" class="form-control" id="recipient-name1" value="{{$employee->biometric}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employment Status</label>
                                        <select name="status" class="form-control custom-select" required>
                                            <option>Select Status</option>
                                            <option value="PERMANENT" {{ $employee->status === 'PERMANENT' ? 'selected' : '' }}>PERMANENT</option>
                                            <option value="CASUAL" {{ $employee->status === 'CASUAL' ? 'selected' : '' }}>CASUAL</option>
                                            <option value="JOB ORDER" {{ $employee->status === 'JOB ORDER' ? 'selected' : '' }}>JOB ORDER</option>
                                            <option value="CO-TERMINOUS" {{ $employee->status === 'CO-TERMINOUS' ? 'selected' : '' }}>CO-TERMINOUS</option>
                                            <option value="ELECTIVE" {{ $employee->status === 'ELECTIVE' ? 'selected' : '' }}>ELECTIVE</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Department</label>
                                        <select name="department" class="form-control custom-select" required>
                                            <option>Select Department</option>
                                            <option value="Municipal Agricultural Services Office" {{ $employee->department === 'Municipal Agricultural Services Office' ? 'selected' : '' }}>Municipal Agricultural Services Office</option>
                                            <option value="Municipal Social Welfare & Development Office" {{ $employee->department === 'Municipal Social Welfare & Development Office' ? 'selected' : '' }}>Municipal Social Welfare & Development Office</option>
                                            <option value="Municipal Assessor's Office"{{ $employee->department === "Municipal Assessor's Office" ? 'selected' : '' }}>Municipal Assessor's Office</option>
                                            <option value="Commision on Election" {{ $employee->department === 'Commision on Election' ? 'selected' : '' }}>Commision on Election</option>
                                            <option value="Local Civil Registrar" {{ $employee->department === 'Local Civil Registrar' ? 'selected' : '' }}>Local Civil Registrar</option>
                                            <option value="Budget Office" {{ $employee->department === 'Budget Office' ? 'selected' : '' }}>Budget Office</option>
                                            <option value="BOMWASA AND BIR" {{ $employee->department === 'BOMWASA AND BIR' ? 'selected' : '' }}>BOMWASA AND BIR</option>
                                            <option value="Accounting Office" {{ $employee->department === 'Accounting Office' ? 'selected' : '' }}>Accounting Office</option>
                                            <option value="PESO" {{ $employee->department === 'PESO' ? 'selected' : '' }}>PESO</option>
                                            <option value="Municipal Treasurer's Office" {{ $employee->department === "Municipal Treasurer's Office" ? 'selected' : '' }}>Municipal Treasurer's Office</option>
                                            <option value="Cogressman's Office" {{ $employee->department === "Congressman's Office" ? 'selected' : '' }}>Congressman's Office</option>
                                            <option value="Human Resource Management Office" {{ $employee->department === 'Human Resource Management Office' ? 'selected' : '' }}>Human Resource Management Office</option>
                                            <option value="MPDC" {{ $employee->department === 'MPDC' ? 'selected' : '' }}>MPDC</option>
                                            <option value="KALAHI" {{ $employee->department === 'KALAHI' ? 'selected' : '' }}>KALAHI</option>
                                            <option value="Office of the Sangguniang Bayan" {{ $employee->department === 'Office of the Sangguniang Bayan' ? 'selected' : '' }}>Office of the Sangguniang Bayan</option>
                                            <option value="Office of the Vice-Mayor" {{ $employee->department === 'Office of the Vice-Mayor' ? 'selected' : '' }}>Office of the Vice-Mayor</option>
                                            <option value="Office of the Mayor" {{ $employee->department === 'Office of the Mayor' ? 'selected' : '' }}>Office of the Mayor</option>
                                            <option value="Engineering Office" {{ $employee->department === 'Engineering Office' ? 'selected' : '' }}>Engineering Office</option>
                                            <option value="MENRO" {{ $employee->department === 'MENRO' ? 'selected' : '' }}>MENRO</option>
                                            <option value="Tourism" {{ $employee->department === 'Tourism' ? 'selected' : '' }}>Tourism</option>
                                            <option value="Rural Health Unit" {{ $employee->department === 'Rural Health Unit' ? 'selected' : '' }}>Rural Health Unit</option>
                                            <option value="DILG" {{ $employee->department === 'DILG' ? 'selected' : '' }}>DILG</option>
                                            <option value="MDRR" {{ $employee->department === 'MDRR' ? 'selected' : '' }}>MDRR</option>
                                            <option value="GSO" {{ $employee->department === 'GSO' ? 'selected' : '' }}>GSO</option>
                                            <option value="DSWD" {{ $employee->department === 'DSWD' ? 'selected' : '' }}>DSWD</option>
                                            <option value="Department of Trade and Industry" {{ $employee->department === 'Department of Trade and Industry' ? 'selected' : '' }}>Department of Trade and Industry</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Position Title</label>
                                        <select name="position" class="form-control custom-select" required>
                                            <option>Select Position Title</option>
                                            <option value="Municipal Government Department Head I" {{ $employee->position === 'Municipal Government Department Head' ? 'selected' : '' }}>Municipal Government Department Head I</option>
                                            <option value="Registration Officer II" {{ $employee->position === 'Registration Officer II' ? 'selected' : '' }}>Registration Officer II</option>
                                            <option value="Social Welfare Officer II" {{ $employee->position === 'Social Welfare Officer II' ? 'selected' : '' }}>Social Welfare Officer II</option>
                                            <option value="Administrative Assistant II" {{ $employee->position === 'Administrative Assistant II' ? 'selected' : '' }}>Administrative Assistant II</option>
                                            <option value="Day Care Worker I" {{ $employee->position === 'Day Care Worker I' ? 'selected' : '' }}>Day Care Worker I</option>
                                            <option value="Municipal Agriculturist I" {{ $employee->position === 'Municipal Agriculturist I' ? 'selected' : '' }}>Municipal Agriculturist I</option>
                                            <option value="Agricultural Technologist" {{ $employee->position === 'Agricultural Technologist' ? 'selected' : '' }}>Agricultural Technologist</option>
                                            <option value="Agricultural Technician II" {{ $employee->position === 'Agricultural Technician II' ? 'selected' : '' }}>Agricultural Technician II</option>
                                            <option value="Administrative Aide I" {{ $employee->position === 'Administrative Aide I' ? 'selected' : '' }}>dministrative Aide I</option>
                                            <option value="Engineer II" {{ $employee->position === 'Engineer II' ? 'selected' : '' }}>Engineer II</option>
                                            <option value="Administrative Aide II" {{ $employee->position === 'Administrative Aide II' ? 'selected' : '' }}>Administrative Aide II</option>
                                            <option value="Administrative Aide III" {{ $employee->position === 'Administrative Aide III' ? 'selected' : '' }}>Administrative Aide III</option>
                                            <option value="Mechanic II" {{ $employee->position === 'Mechanic II' ? 'selected' : '' }}>Mechanic II</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Joining</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="dateofjoining" class="form-control" id="recipient-name1" value="{{$employee->dateofjoining}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Leaving </label>
                                        <input type="date" name="dateofleaving" class="form-control" id="recipient-name1" value="{{$employee->dateofleaving}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Mandatory Retirement</label>
                                        <input type="date" name="dateofretirement" class="form-control" id="recipient-name1" value="{{$employee->dateofretirement}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Salary Grade</label>
                                        <select name="salary" class="form-control custom-select" required>
                                            <option>Select Salary Grade</option>
                                            <option value="1" {{ (string) $employee->salary === '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ (string) $employee->salary === '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ (string) $employee->salary === '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ (string) $employee->salary === '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ (string) $employee->salary === '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ (string) $employee->salary === '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ (string) $employee->salary === '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ (string) $employee->salary === '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ (string) $employee->salary === '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ (string) $employee->salary === '10' ? 'selected' : '' }}>10</option>
                                            <option value="11" {{ (string) $employee->salary === '11' ? 'selected' : '' }}>11</option>
                                            <option value="12" {{ (string) $employee->salary === '12' ? 'selected' : '' }}>12</option>
                                            <option value="13" {{ (string) $employee->salary === '13' ? 'selected' : '' }}>13</option>
                                            <option value="14" {{ (string) $employee->salary === '14' ? 'selected' : '' }}>14</option>
                                            <option value="15" {{ (string) $employee->salary === '15' ? 'selected' : '' }}>15</option>
                                            <option value="16" {{ (string) $employee->salary === '16' ? 'selected' : '' }}>16</option>
                                            <option value="17" {{ (string) $employee->salary === '17' ? 'selected' : '' }}>17</option>
                                            <option value="18" {{ (string) $employee->salary === '18' ? 'selected' : '' }}>18</option>
                                            <option value="19" {{ (string) $employee->salary === '19' ? 'selected' : '' }}>19</option>
                                            <option value="20" {{ (string) $employee->salary === '20' ? 'selected' : '' }}>20</option>
                                            <option value="21" {{ (string) $employee->salary === '21' ? 'selected' : '' }}>21</option>
                                            <option value="22" {{ (string) $employee->salary === '22' ? 'selected' : '' }}>22</option>
                                            <option value="23" {{ (string) $employee->salary === '23' ? 'selected' : '' }}>23</option>
                                            <option value="24" {{ (string) $employee->salary === '24' ? 'selected' : '' }}>24</option>
                                            <option value="25" {{ (string) $employee->salary === '25' ? 'selected' : '' }}>25</option>
                                            <option value="26" {{ (string) $employee->salary === '26' ? 'selected' : '' }}>26</option>
                                            <option value="27" {{ (string) $employee->salary === '27' ? 'selected' : '' }}>27</option>
                                            <option value="28" {{ (string) $employee->salary === '28' ? 'selected' : '' }}>28</option>
                                            <option value="29" {{ (string) $employee->salary === '29' ? 'selected' : '' }}>29</option>
                                            <option value="30" {{ (string) $employee->salary === '30' ? 'selected' : '' }}>30</option>
                                            <option value="31" {{ (string) $employee->salary === '31' ? 'selected' : '' }}>31</option>
                                            <option value="32" {{ (string) $employee->salary === '32' ? 'selected' : '' }}>32</option>
                                            <option value="33" {{ (string) $employee->salary === '33' ? 'selected' : '' }}>33</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label>Step</label>
                                        <select name="step" class="form-control custom-select" required>
                                            <option>Select Step</option>
                                            <option value="1" {{ (string) $employee->step === '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ (string) $employee->step === '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ (string) $employee->step === '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ (string) $employee->step === '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ (string) $employee->step === '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ (string) $employee->step === '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ (string) $employee->step === '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ (string) $employee->step === '8' ? 'selected' : '' }}>8</option>
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
