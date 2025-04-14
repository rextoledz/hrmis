@extends('layouts.users')

@section('content')
@if(isset($employee))
    <section style="background-color: #eee; color:black;">
  <div class="container py-5"> 
    <div class="row" >
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{asset('assets/images/users/userav-min.png')}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }} {{ $employee->suffix}}</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Personal Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }} {{ $employee->suffix}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofbirth }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Place of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->placeofbirth }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Purok/Street</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->address }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card mb-6">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Barangay</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->barangay }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Municipality</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->municipality }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Town/Province</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->province }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Civil Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->maritalstatus }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->gender }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Blood Type</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->bloodtype }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->contactnumber }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Person to Contact in Case of Emergency</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->persontocontact }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Contact Number of Contact Person</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->contact }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Personal Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->personalemail }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Corporate Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->corporateemail }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">GSIS ID Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->gsis }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">PAG-IBIG ID Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->pagibig }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Philhealth Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->philhealth }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">SSS Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->sss }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">TIN Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->tin }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">UMID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->umid }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-14">
        <div class="card mb-6">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Family Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Spouse's Surname</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->spousesurname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Spouse's Firstname</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->spousefirstname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Spouse's Middlename</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->spousemiddlename }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name Extension (Jr., Sr.)</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->extension }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Occupation</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->occupation }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Employer/Business Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->businessname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Business Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->businessaddress }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telephone Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->telephone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Father's Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->fathersurname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mother's Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->mothersurname }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col-lg-14">
        <div class="card mb-6">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Educational Background</b></p>
            <br>
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
              <td>{{ $employee->elementaryschool }}</td>
              <td>{{ $employee->elementarybasiceducation }}</td>
              <td>{{ $employee->elemhighestlevel }}</td>
              <td>{{ $employee->yeargradelementary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Secondary</td>
              <td>{{ $employee->secondaryschool }}</td>
              <td>{{ $employee->secondarybasiceducation }}</td>
              <td>{{ $employee->secondhighestlevel }}</td>
              <td>{{ $employee->yeargradsecondary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Vocational</td>
              <td>{{ $employee->vocationalschool }}</td>
              <td>{{ $employee->vocationalbasiceducation }}</td>
              <td>{{ $employee->vocationhighestlevel }}</td>
              <td>{{ $employee->yeargradvocational }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>College</td>
             <td>{{ $employee->course }}</td>
              <td>{{ $employee->collegebasiceducation }}</td>
              <td>{{ $employee->highestlevel }}</td>
              <td>{{ $employee->yeargradcollege }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
            <td>Graduate Studies</td>
              <td>{{ $employee->graduatestudies }}</td>
              <td>{{ $employee->graduatestudiesbasiceducation }}</td>
              <td>{{ $employee->graduate }}</td>
              <td>{{ $employee->yeargradstudies }}</td>
            </tr>
            
          </tbody>
        </table>
      </div>


            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CSC Professional Eligibility</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->csc }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Rating</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->rating }}</p>
              </div>
            </div>
            <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Date of Examination</p>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employee->dateofexamination }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Place of Examination</p>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employee->placeofexamination }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">License Number</p>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employee->licensenumber }}
                    </div>
                  </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Issuance-PRC ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofissuance }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Validity-PRC ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofvalidity }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Additional Certification (if any)</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->certification }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

          <div class="col-lg-14">
        <div class="card mb-6">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Work Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Personnel ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->personnel }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Biometric Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->biometric }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Employment Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->status }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Department</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->department }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Position Title</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->position }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Joining</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofjoining }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Leaving</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofleaving }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Mandatory Retirement</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofretirement }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Salary Grade</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->salary }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Step</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->step }}</p>
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
</section>
@endif
@endsection