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
                                            <option value="Office of the Mayor" {{ $employee->department === 'Office of the Mayor' ? 'selected' : '' }}>Office of the Mayor</option>
                                            <option value="Office of the Mayor - BAC" {{ $employee->department === 'Office of the Mayor - BAC' ? 'selected' : '' }}>Office of the Mayor - BAC</option>
                                            <option value="Office of the Mayor - BIR" {{ $employee->department === 'Office of the Mayor - BIR' ? 'selected' : '' }}>Office of the Mayor - BIR</option>
                                            <option value="Office of the Mayor - BOMWASA" {{ $employee->department === 'Office of the Mayor - BOMWASA' ? 'selected' : '' }}>Office of the Mayor - BOMWASA</option>
                                            <option value="Office of the Mayor - COMELEC" {{ $employee->department === 'Office of the Mayor - COMELEC' ? 'selected' : '' }}>Office of the Mayor - COMELEC</option>
                                            <option value="Office of the Mayor - DILG" {{ $employee->department === 'Office of the Mayor - DILG' ? 'selected' : '' }}>Office of the Mayor - DILG</option>
                                            <option value="Office of the Mayor - MOTORPOOL" {{ $employee->department === 'Office of the Mayor - MOTORPOOL' ? 'selected' : '' }}>Office of the Mayor - MOTORPOOL</option>
                                            <option value="Office of the Mayor - General Services Office" {{ $employee->department === 'Office of the Mayor - General Services Office' ? 'selected' : '' }}>Office of the Mayor - General Services Office</option>
                                            <option value="Office of the Mayor - Human Resource Management Office" {{ $employee->department === 'Office of the Mayor - Human Resource Management Office' ? 'selected' : '' }}>Office of the Mayor - Human Resource Management Office</option>
                                            <option value="Office of the Mayor - Municipal Tourism Office" {{ $employee->department === 'Office of the Mayor - Municipal Tourism Office' ? 'selected' : '' }}>Office of the Mayor - Municipal Tourism Office</option>
                                            <option value="Office of the Mayor – Municipal Environment and Natural Resources Office" {{ $employee->department === 'Office of the Mayor – Municipal Environment and Natural Resources Office' ? 'selected' : '' }}>Office of the Mayor – Municipal Environment and Natural Resources Office</option>
                                            <option value="Office of the Sangguniang Bayan" {{ $employee->department === 'Office of the Sangguniang Bayan' ? 'selected' : '' }}>Office of the Sangguniang Bayan</option>
                                            <option value="Municipal Agricultural Services Office" {{ $employee->department === 'Municipal Agricultural Services Office' ? 'selected' : '' }}>Municipal Agricultural Services Office</option>
                                            <option value="Municipal Disaster Risk Reduction and Management Office" {{ $employee->department === 'Municipal Disaster Risk Reduction and Management Office' ? 'selected' : '' }}>Municipal Disaster Risk Reduction and Management Office</option>
                                            <option value="Municipal Social Welfare and Development Office" {{ $employee->department === 'Municipal Social Welfare and Development Office' ? 'selected' : '' }}>Municipal Social Welfare and Development Office</option>
                                            <option value="Municipal Social Welfare and Development Office - 4Ps" {{ $employee->department === 'Municipal Social Welfare and Development Office - 4Ps' ? 'selected' : '' }}>Municipal Social Welfare and Development Office - 4Ps</option>
                                            <option value="Municipal Social Welfare and Development Office - KALAHI" {{ $employee->department === 'Municipal Social Welfare and Development Office - KALAHI' ? 'selected' : '' }}>Municipal Social Welfare and Development Office - KALAHI</option>
                                            <option value="Municipal Social Welfare and Development Office - OSCA" {{ $employee->department === 'Municipal Social Welfare and Development Office - OSCA' ? 'selected' : '' }}>Municipal Social Welfare and Development Office - OSCA</option>
                                            <option value="Office of the Municipal Accountant" {{ $employee->department === 'Office of the Municipal Accountant' ? 'selected' : '' }}>Office of the Municipal Accountant</option>
                                            <option value="Office of the Municipal Assessor" {{ $employee->department === 'Office of the Municipal Assessor' ? 'selected' : '' }}>Office of the Municipal Assessor</option>
                                            <option value="Office of the Municipal Budget Officer" {{ $employee->department === 'Office of the Municipal Budget Officer' ? 'selected' : '' }}>Office of the Municipal Budget Officer</option>
                                            <option value="Office of the Municipal Civil Registrar" {{ $employee->department === 'Office of the Municipal Civil Registrar' ? 'selected' : '' }}>Office of the Municipal Civil Registrar</option>
                                            <option value="Office of the Municipal Engineer" {{ $employee->department === 'Office of the Municipal Engineer' ? 'selected' : '' }}>Office of the Municipal Engineer</option>
                                            <option value="Office of the Municipal Planning and Development Coordinator" {{ $employee->department === 'Office of the Municipal Planning and Development Coordinator' ? 'selected' : '' }}>Office of the Municipal Planning and Development Coordinator</option>
                                            <option value="Office of the Municipal Treasurer" {{ $employee->department === 'Office of the Municipal Treasurer' ? 'selected' : '' }}>Office of the Municipal Treasurer</option>
                                            <option value="Rural Health Unit" {{ $employee->department === 'Rural Health Unit' ? 'selected' : '' }}>Rural Health Unit</option>
                                        </select>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                    <label>Position Title</label>
                                    <select name="position" class="form-control custom-select" required>
                                        <option>Select Position Title</option>
                                        <option value="MUNICIPAL MAYOR" {{ $employee->position === 'MUNICIPAL MAYOR' ? 'selected' : '' }}>MUNICIPAL MAYOR</option>
                                        <option value="SENIOR ADMINISTRATIVE ASST. III (Private Secretary II)" {{ $employee->position === 'SENIOR ADMINISTRATIVE ASST. III (Private Secretary II)' ? 'selected' : '' }}>SENIOR ADMINISTRATIVE ASST. III (Private Secretary II)</option>
                                        <option value="ADMINISTRATIVE OFFICER IV (Human Resource Management Officer II)" {{ $employee->position === 'ADMINISTRATIVE OFFICER IV (Human Resource Management Officer II)' ? 'selected' : '' }}>ADMINISTRATIVE OFFICER IV (Human Resource Management Officer II)</option>
                                        <option value="ADMINISTRATIVE OFFICER III (Supply Officer II)" {{ $employee->position === 'ADMINISTRATIVE OFFICER III (Supply Officer II)' ? 'selected' : '' }}>ADMINISTRATIVE OFFICER III (Supply Officer II)</option>
                                        <option value="INTERNAL AUDITOR I" {{ $employee->position === 'INTERNAL AUDITOR I' ? 'selected' : '' }}>INTERNAL AUDITOR I</option>
                                        <option value="ADMINISTRATIVE AIDE V (Community Affairs Asst.)" {{ $employee->position === 'ADMINISTRATIVE AIDE V (Community Affairs Asst.)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE V (Community Affairs Asst.)</option>
                                        <option value="ADMINISTRATIVE ASST. II (Human Resource Management Assistant)" {{ $employee->position === 'ADMINISTRATIVE ASST. II (Human Resource Management Assistant)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. II (Human Resource Management Assistant)</option>
                                        <option value="ADMINISTRATIVE ASST. II (Market Inspector II)" {{ $employee->position === 'ADMINISTRATIVE ASST. II (Market Inspector II)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. II (Market Inspector II)</option>
                                        <option value="License Inspector II" {{ $employee->position === 'License Inspector II' ? 'selected' : '' }}>License Inspector II</option>
                                        <option value="ADMINISTRATIVE ASST. I (Computer Operator I)" {{ $employee->position === 'ADMINISTRATIVE ASST. I (Computer Operator I)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. I (Computer Operator I)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Plumber I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Plumber I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Plumber I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="TOURISM OPERATIONS OFFICER I" {{ $employee->position === 'TOURISM OPERATIONS OFFICER I' ? 'selected' : '' }}>TOURISM OPERATIONS OFFICER I</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="MEAT INSPECTOR I" {{ $employee->position === 'MEAT INSPECTOR I' ? 'selected' : '' }}>MEAT INSPECTOR I</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="ADMINISTRATIVE OFFICER IV" {{ $employee->position === 'ADMINISTRATIVE OFFICER IV' ? 'selected' : '' }}>ADMINISTRATIVE OFFICER IV</option>
                                        <option value="ADMINISTRATIVE ASSISTANT VI" {{ $employee->position === 'ADMINISTRATIVE ASSISTANT VI' ? 'selected' : '' }}>ADMINISTRATIVE ASSISTANT VI</option>
                                        <option value="(Computer Operator III)" {{ $employee->position === '(Computer Operator III)' ? 'selected' : '' }}>(Computer Operator III)</option>
                                        <option value="EXECUTIVE ASSISTANT II" {{ $employee->position === 'EXECUTIVE ASSISTANT II' ? 'selected' : '' }}>EXECUTIVE ASSISTANT II</option>
                                        <option value="LABOR AND EMPLOYMENT OFFICER III" {{ $employee->position === 'LABOR AND EMPLOYMENT OFFICER III' ? 'selected' : '' }}>LABOR AND EMPLOYMENT OFFICER III</option>
                                        <option value="MUN. VICE MAYOR" {{ $employee->position === 'MUN. VICE MAYOR' ? 'selected' : '' }}>MUN. VICE MAYOR</option>
                                        <option value="SANGGUNIANG BAYAD MEMBER" {{ $employee->position === 'SANGGUNIANG BAYAD MEMBER' ? 'selected' : '' }}>SANGGUNIANG BAYAD MEMBER</option>
                                        <option value="SANGGUNIANG BAYAD MEMBER (ABC President)" {{ $employee->position === 'SANGGUNIANG BAYAD MEMBER (ABC President)' ? 'selected' : '' }}>SANGGUNIANG BAYAD MEMBER (ABC President)</option>
                                        <option value="SANGGUNIANG BAYAD MEMBER (PPSK President)" {{ $employee->position === 'SANGGUNIANG BAYAD MEMBER (PPSK President)' ? 'selected' : '' }}>SANGGUNIANG BAYAD MEMBER (PPSK President)</option>
                                        <option value="SECRETARY TO THE SANGGUNIAN" {{ $employee->position === 'SECRETARY TO THE SANGGUNIAN' ? 'selected' : '' }}>SECRETARY TO THE SANGGUNIAN</option>
                                        <option value="ADMINISTRATIVE AIDE VI (Clerk III)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (Clerk III)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (Clerk III)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Driver I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Driver I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Driver I)</option>
                                        <option value="LOCAL LEGISLATIVE STAFF OFFICER I" {{ $employee->position === 'LOCAL LEGISLATIVE STAFF OFFICER I' ? 'selected' : '' }}>LOCAL LEGISLATIVE STAFF OFFICER I</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="LOCAL LEGISLATIVE STAFF OFFICER I" {{ $employee->position === 'LOCAL LEGISLATIVE STAFF OFFICER I' ? 'selected' : '' }}>LOCAL LEGISLATIVE STAFF OFFICER I</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Planning and Development Coordinator)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Planning and Development Coordinator)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Planning and Development Coordinator)</option>
                                        <option value="ENVIRONMENTAL MANAGEMENT SPECIALIST I" {{ $employee->position === 'ENVIRONMENTAL MANAGEMENT SPECIALIST I' ? 'selected' : '' }}>ENVIRONMENTAL MANAGEMENT SPECIALIST I</option>
                                        <option value="PLANNING ASSISTANT" {{ $employee->position === 'PLANNING ASSISTANT' ? 'selected' : '' }}>PLANNING ASSISTANT</option>
                                        <option value="ADMINISTRATIVE AIDE VI (Draftsman)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (Draftsman)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (Draftsman)</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Budget Officer)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Budget Officer)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Budget Officer)</option>
                                        <option value="BUDGET OFFICER II" {{ $employee->position === 'BUDGET OFFICER II' ? 'selected' : '' }}>BUDGET OFFICER II</option>
                                        <option value="ADMINISTRATIVE ASST. II (Budgeting Assistant)" {{ $employee->position === 'ADMINISTRATIVE ASST. II (Budgeting Assistant)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. II (Budgeting Assistant)</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Accountant)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Accountant)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Accountant)</option>
                                        <option value="ACCOUNTANT II" {{ $employee->position === 'ACCOUNTANT II' ? 'selected' : '' }}>ACCOUNTANT II</option>
                                        <option value="ADMINISTRATIVE ASST. III (Senior Bookkeeper)" {{ $employee->position === 'ADMINISTRATIVE ASST. III (Senior Bookkeeper)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. III (Senior Bookkeeper)</option>
                                        <option value="ADMINISTRATIVE AIDE VI (Accounting Clerk II)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (Accounting Clerk II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (Accounting Clerk II)</option>
                                        <option value="MUN. GOVT. DEPT.HEAD I (Municipal Treasurer I)" {{ $employee->position === 'MUN. GOVT. DEPT.HEAD I (Municipal Treasurer I)' ? 'selected' : '' }}>MUN. GOVT. DEPT.HEAD I (Municipal Treasurer I)</option>
                                        <option value="MUN. GOVT. ASST. DEPT.HEAD I (Assistant Municipal Treasurer)" {{ $employee->position === 'MUN. GOVT. ASST. DEPT.HEAD I (Assistant Municipal Treasurer)' ? 'selected' : '' }}>MUN. GOVT. ASST. DEPT.HEAD I (Assistant Municipal Treasurer)</option>
                                        <option value="ADMINISTRATIVE AIDE VI (Clerk III)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (Clerk III)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (Clerk III)</option>
                                        <option value="ADMINISTRATIVE AIDE IV (Clerk II)" {{ $employee->position === 'ADMINISTRATIVE AIDE IV (Clerk II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE IV (Clerk II)</option>
                                        <option value="ADMINISTRATIVE AIDE IV (Clerk II)" {{ $employee->position === 'ADMINISTRATIVE AIDE IV (Clerk II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE IV (Clerk II)</option>
                                        <option value="Revenue Collection Clerk III" {{ $employee->position === 'Revenue Collection Clerk III' ? 'selected' : '' }}>Revenue Collection Clerk III</option>
                                        <option value="ADMINISTRATIVE ASST. I (Rev. Coll. Clerk II)" {{ $employee->position === 'ADMINISTRATIVE ASST. I (Rev. Coll. Clerk II)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. I (Rev. Coll. Clerk II)</option>
                                        <option value="ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)" {{ $employee->position === 'ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)</option>
                                        <option value="ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)" {{ $employee->position === 'ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)</option>
                                        <option value="ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)" {{ $employee->position === 'ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE V (Rev. Coll. Clerk I)</option>
                                        <option value="Revenue Collection Clerk I" {{ $employee->position === 'Revenue Collection Clerk I' ? 'selected' : '' }}>Revenue Collection Clerk I</option>
                                        <option value="Revenue Collection Clerk I" {{ $employee->position === 'Revenue Collection Clerk I' ? 'selected' : '' }}>Revenue Collection Clerk I</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Assessor)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Assessor)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Assessor)</option>
                                        <option value="ADMINISTRATIVE ASST. III (Assessment Clerk III)" {{ $employee->position === 'ADMINISTRATIVE ASST. III (Assessment Clerk III)' ? 'selected' : '' }}>ADMINISTRATIVE ASST. III (Assessment Clerk III)</option>
                                        <option value="ADMINISTRATIVE AIDE VI (Assessment Clerk II)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (Assessment Clerk II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (Assessment Clerk II)</option>
                                        <option value="Assessment Clerk I" {{ $employee->position === 'Assessment Clerk I' ? 'selected' : '' }}>Assessment Clerk I</option>
                                        <option value="Assessment Clerk I" {{ $employee->position === 'Assessment Clerk I' ? 'selected' : '' }}>Assessment Clerk I</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Health Officer)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Health Officer)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Health Officer)</option>
                                        <option value="NURSE II" {{ $employee->position === 'NURSE II' ? 'selected' : '' }}>NURSE II</option>
                                        <option value="NURSE II" {{ $employee->position === 'NURSE II' ? 'selected' : '' }}>NURSE II</option>
                                        <option value="MIDWIFE III" {{ $employee->position === 'MIDWIFE III' ? 'selected' : '' }}>MIDWIFE III</option>
                                        <option value="MIDWIFE II" {{ $employee->position === 'MIDWIFE II' ? 'selected' : '' }}>MIDWIFE II</option>
                                        <option value="MIDWIFE II" {{ $employee->position === 'MIDWIFE II' ? 'selected' : '' }}>MIDWIFE II</option>
                                        <option value="MIDWIFE II" {{ $employee->position === 'MIDWIFE II' ? 'selected' : '' }}>MIDWIFE II</option>
                                        <option value="MIDWIFE II" {{ $employee->position === 'MIDWIFE II' ? 'selected' : '' }}>MIDWIFE II</option>
                                        <option value="SANITARY INSPECTOR l" {{ $employee->position === 'SANITARY INSPECTOR l' ? 'selected' : '' }}>SANITARY INSPECTOR l</option>
                                        <option value="MIDWIFE I" {{ $employee->position === 'MIDWIFE I' ? 'selected' : '' }}>MIDWIFE I</option>
                                        <option value="MIDWIFE I" {{ $employee->position === 'MIDWIFE I' ? 'selected' : '' }}>MIDWIFE I</option>
                                        <option value="MIDWIFE I" {{ $employee->position === 'MIDWIFE I' ? 'selected' : '' }}>MIDWIFE I</option>
                                        <option value="MEDICAL TECHNOLOGIST II" {{ $employee->position === 'MEDICAL TECHNOLOGIST II' ? 'selected' : '' }}>MEDICAL TECHNOLOGIST II</option>
                                        <option value="DRIVER I" {{ $employee->position === 'DRIVER I' ? 'selected' : '' }}>DRIVER I</option>
                                        <option value="NURSE II" {{ $employee->position === 'NURSE II' ? 'selected' : '' }}>NURSE II</option>
                                        <option value="NURSE II" {{ $employee->position === 'NURSE II' ? 'selected' : '' }}>NURSE II</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Civil Registrar)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Civil Registrar)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Civil Registrar)</option>
                                        <option value="REGISTRATION OFFICER II" {{ $employee->position === 'REGISTRATION OFFICER II' ? 'selected' : '' }}>REGISTRATION OFFICER II</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Social Welfare and Development Officer)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Social Welfare and Development Officer)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Social Welfare and Development Officer)</option>
                                        <option value="SOCIAL WELFARE OFFICER II" {{ $employee->position === 'SOCIAL WELFARE OFFICER II' ? 'selected' : '' }}>SOCIAL WELFARE OFFICER II</option>
                                        <option value="Social Welfare Assistant" {{ $employee->position === 'Social Welfare Assistant' ? 'selected' : '' }}>Social Welfare Assistant</option>
                                        <option value="DAY CARE WORKER I" {{ $employee->position === 'DAY CARE WORKER I' ? 'selected' : '' }}>DAY CARE WORKER I</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Agriculturist)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Agriculturist)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Agriculturist)</option>
                                        <option value="AGRICULTURAL TECHNOLOGIST" {{ $employee->position === 'AGRICULTURAL TECHNOLOGIST' ? 'selected' : '' }}>AGRICULTURAL TECHNOLOGIST</option>
                                        <option value="AGRICULTURAL TECHNOLOGIST" {{ $employee->position === 'AGRICULTURAL TECHNOLOGIST' ? 'selected' : '' }}>AGRICULTURAL TECHNOLOGIST</option>
                                        <option value="AGRICULTURAL TECHNOLOGIST" {{ $employee->position === 'AGRICULTURAL TECHNOLOGIST' ? 'selected' : '' }}>AGRICULTURAL TECHNOLOGIST</option>
                                        <option value="AGRICULTURAL TECHNICIAN II" {{ $employee->position === 'AGRICULTURAL TECHNICIAN II' ? 'selected' : '' }}>AGRICULTURAL TECHNICIAN II</option>
                                        <option value="ADMINISTRATIVE AIDE I (Laborer I)" {{ $employee->position === 'ADMINISTRATIVE AIDE I (Laborer I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE I (Laborer I)</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (Municipal Engineer)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (Municipal Engineer)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (Municipal Engineer)</option>
                                        <option value="ENGINEER II" {{ $employee->position === 'ENGINEER II' ? 'selected' : '' }}>ENGINEER II</option>
                                        <option value="ADMINISTRATIVE AIDE III (Driver I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Driver I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Driver I)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Driver I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Driver I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Driver I)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Driver I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Driver I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Driver I)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Clerk I)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Clerk I)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Clerk I)</option>
                                        <option value="ADMINISTRATIVE AIDE III (Laborer II)" {{ $employee->position === 'ADMINISTRATIVE AIDE III (Laborer II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE III (Laborer II)</option>
                                        <option value="ENGINEER II" {{ $employee->position === 'ENGINEER II' ? 'selected' : '' }}>ENGINEER II</option>
                                        <option value="ADMINISTRATIVE AIDE VI (MECHANIC II)" {{ $employee->position === 'ADMINISTRATIVE AIDE VI (MECHANIC II)' ? 'selected' : '' }}>ADMINISTRATIVE AIDE VI (MECHANIC II)</option>
                                        <option value="MUN. GOVT. DEPT. HEAD I (LDRRMO)" {{ $employee->position === 'MUN. GOVT. DEPT. HEAD I (LDRRMO)' ? 'selected' : '' }}>MUN. GOVT. DEPT. HEAD I (LDRRMO)</option>
                                        <option value="LOCAL DISASTER RISK REDUCTION MANAGEMENT OFFICER II (LDRRMO II)" {{ $employee->position === 'LOCAL DISASTER RISK REDUCTION MANAGEMENT OFFICER II (LDRRMO II)' ? 'selected' : '' }}>LOCAL DISASTER RISK REDUCTION MANAGEMENT OFFICER II (LDRRMO II)</option>
                                        <option value="LOCAL DISASTER RISK REDUCTION MANAGEMENT ASSISTANT (LDRRMA)" {{ $employee->position === 'LOCAL DISASTER RISK REDUCTION MANAGEMENT ASSISTANT (LDRRMA)' ? 'selected' : '' }}>LOCAL DISASTER RISK REDUCTION MANAGEMENT ASSISTANT (LDRRMA)</option>

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
