@extends('layouts.users')

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
                                <form class="row" action="{{ route('useremployee.edit.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Surname </label>
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
                                            <option value="Married" {{ $employee->maritalstatus === 'Married' ? 'selected' : '' }}>Married</option>
                                            <option value="Common-Law Married" {{ $employee->maritalstatus === 'Common-Law Married' ? 'selected' : '' }}>Common-Law Married</option>
                                            <option value="Widowed" {{ $employee->maritalstatus === 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ $employee->maritalstatus === 'Separated' ? 'selected' : '' }}>Separated</option>
                                            <option value="Divorced" {{ $employee->maritalstatus === 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            <option value="Single" {{ $employee->maritalstatus === 'Single' ? 'selected' : '' }}>Single</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="Male" {{ $employee->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $employee->gender === 'Female' ? 'selected' : '' }}>Female</option>
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
                                        <label>Tin Number </label>
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
                                        <label>Spouse's Surname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="spousesurname" class="form-control form-control-line" value="{{$employee->spousesurname}}"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Firstname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" id="" name="spousefirstname" class="form-control form-control-line" value="{{$employee->spousefirstname}}"> 
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
                                        <label>Father's Surname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="fathersurname" id="example-email2" name="example-email" class="form-control" value="{{$employee->fathersurname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Firstname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="fatherfirstname" id="example-email2" name="example-email" class="form-control" value="{{$employee->fatherfirstname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Middlename</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="fathermiddlename" id="example-email2" name="example-email" class="form-control" value="{{$employee->fathermiddlename}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr.)</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="nameextension" id="example-email2" name="example-email" class="form-control" value="{{$employee->nameextension}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Maiden Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="maidenname" id="example-email2" name="example-email" class="form-control" value="{{$employee->maidenname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Surname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="mothersurname" id="example-email2" name="example-email" class="form-control" value="{{$employee->mothersurname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Firstname</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="motherfirstname" id="example-email2" name="example-email" class="form-control" value="{{$employee->motherfirstname}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Middlename</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="mothermiddlename" id="example-email2" name="example-email" class="form-control" value="{{$employee->mothermiddlename}}" placeholder="">
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
                                        <input type="text" name="dateofexamination" class="form-control" id="recipient-name1"  value="{{$employee->dateofexamination}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place of Examination </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="placeofexamination" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->placeofexamination}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>License Number </label>
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
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                     <a href ="{{ route('useremployee.view') }}"><button type="button"  class="btn btn-danger">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
