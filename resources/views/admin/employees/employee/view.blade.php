@extends('layouts.default')

@section('content')
    <link href="{{ asset('style/style.css')}}" rel="stylesheet">

  <div class="container mt-2">
        <div class="card mb-7" style="max-width: 500px;  ">
            <div class="row g-12" style="margin-right: -25.75rem">
                <div class="col-md-12">
          
      <div class="row card p-1" >
      @include('layouts.partials.messages')
         <form action="{{ route('employee.edit.view') }}"  method="post">
          @csrf
            <div class="col-md-12">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('assets/images/users/userav-min.png')}}" alt="Admin" class="rounded-circle" width="250">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <br>
                <div>
                  <h3>Personal Background</h3>
                </div>
                <br>
                <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                       {{ $employees->lastname }} 
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                     {{ $employees->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                     {{ $employees->middlename }} 
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" >
              <div class="card mb-3" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Extension (Jr., Sr.)</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->suffix }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofbirth }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->placeofbirth }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purok/Street</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->address }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Barangay</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->barangay }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Municipality</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->municipality }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Town/Province</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->province }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Civil Status</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->maritalstatus }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                     {{ $employees->gender }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Type</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                       {{ $employees->bloodtype }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->contactnumber }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Person to Contact in Case of Emergency</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->persontocontact }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contact Number of Contact Person</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->contact }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personal Email</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->personalemail }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Corporate Email</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->corporateemail }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">GSIS ID Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->gsis }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">PAG-IBIG ID Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->pagibig }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Philhealth Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->philhealth }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">SSS Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->sss }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">TIN</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->tin }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">UMID</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->umid }}
                    </div>
                  </div>
                  <hr>
                  <br>
                  <div>
                    <h3>Family Background</h3>
                  </div>
                  <br>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Lastname</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->spousesurname }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->spousefirstname }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->spousemiddlename }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Occupation</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->occupation }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Business Name</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->businessname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Business Address</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->businessaddress }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telephone</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->telephone }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Extension</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->extension }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Father's Name</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->fathersurname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mother's Name</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->maidenname }}
                    </div>
                  </div>
                  <hr>
                  <br>
                  <div>
                    <h3>Educational Background</h3>
                  </div>
                  <br>
                  <hr>
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
              <td>{{ $employees->elementaryschool }}</td>
              <td>{{ $employees->elementarybasiceducation }}</td>
              <td>{{ $employees->elemhighestlevel }}</td>
              <td>{{ $employees->yeargradelementary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Secondary</td>
              <td>{{ $employees->secondaryschool }}</td>
              <td>{{ $employees->blackbasiceducation }}</td>
              <td>{{ $employees->secondhighestlevel }}</td>
              <td>{{ $employees->yeargradsecondary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Vocational</td>
              <td>{{ $employees->vocationalschool }}</td>
              <td>{{ $employees->vocationalbasiceducation }}</td>
              <td>{{ $employees->vocationhighestlevel }}</td>
              <td>{{ $employees->yeargradvocational }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>College</td>
             <td>{{ $employees->course }}</td>
              <td>{{ $employees->collegebasiceducation }}</td>
              <td>{{ $employees->highestlevel }}</td>
              <td>{{ $employees->yeargradcollege }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
            <td>Graduate Studies</td>
              <td>{{ $employees->graduatestudies }}</td>
              <td>{{ $employees->graduatestudiesbasiceducation }}</td>
              <td>{{ $employees->graduate }}</td>
              <td>{{ $employees->yeargradstudies }}</td>
            </tr>
            
          </tbody>
        </table>
      </div>
                <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CSC Professional Eligibility</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->csc }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rating</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->rating}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Examination</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofexamination}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place of Examination</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->placeofexamination}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">PRC - License Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->licensenumber}}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Issuance-PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofissuance }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Validity-PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofvalidity }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Additional Certification (if any)</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->certification }}
                    </div>
                  </div>
                  <hr>
                    <br>
                  <div>
                    <h3>Work Background</h3>
                  </div>
                  <br>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personnel ID</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->personnel }}
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Biometric Number</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->biometric }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employment Status</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->status }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->department }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Position Title</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->position }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Joining</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofjoining }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Leaving</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofleaving }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Mandatory Retirement</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->dateofretirement }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Salary Grade</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->salary }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Step</h6>
                    </div>
                    <div class="col-sm-9 text-black">
                        {{ $employees->step }}
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
    </div>
  </form>
</div>
</div>

</div>

@endsection