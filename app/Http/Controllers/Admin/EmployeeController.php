<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
     public function employeeemployees()
    {   
        $employees = Employee::get();
        return view('admin.employees.employee.index', [
            'employees'=>$employees
        ]);

    }  

    public function addemployee(request $request){
        $employees = Employee::get();
        return view('admin.employees.employee.add', [
            'employees'=>$employees
        ]);
    }

    public function storeemployee(Request $request){ 
        $employeesave =new Employee();
        $employeesave->firstname = $request->firstname;
        $employeesave->middlename = $request->middlename;
        $employeesave->lastname = $request->lastname;
        $employeesave->suffix = $request->suffix;
        $employeesave->address = $request->address;
        $employeesave->barangay = $request->barangay;
        $employeesave->municipality = $request->municipality;
        $employeesave->province = $request->province;
        $employeesave->maritalstatus = $request->maritalstatus;
        $employeesave->dateofbirth = $request->dateofbirth;
        $employeesave->placeofbirth = $request->placeofbirth;
        $employeesave->gender = $request->gender;
        $employeesave->bloodtype = $request->bloodtype;
        $employeesave->contactnumber = $request->contactnumber;
        $employeesave->persontocontact = $request->persontocontact;
        $employeesave->contact = $request->contact;
        $employeesave->personalemail = $request->personalemail;
        $employeesave->corporateemail = $request->corporateemail;
        $employeesave->gsis = $request->gsis;
        $employeesave->pagibig = $request->pagibig;
        $employeesave->philhealth = $request->philhealth;
        $employeesave->sss = $request->sss;
        $employeesave->tin = $request->tin;
        $employeesave->umid = $request->umid;
        $employeesave->spousesurname = $request->spousesurname;
        $employeesave->spousefirstname = $request->spousefirstname;
        $employeesave->spousemiddlename = $request->spousemiddlename;
        $employeesave->occupation = $request->occupation;
        $employeesave->businessname = $request->businessname;
        $employeesave->businessaddress = $request->businessaddress;
        $employeesave->telephone = $request->telephone;
        $employeesave->extension = $request->extension;
        $employeesave->fathersurname = $request->fathersurname;
        $employeesave->maidenname = $request->maidenname;
        $employeesave->mothersurname = $request->mothersurname;
        $employeesave->elementaryschool = $request->elementaryschool;
        $employeesave->secondaryschool = $request->secondaryschool;
        $employeesave->secondhighestlevel = $request->secondhighestlevel;
        $employeesave->elemhighestlevel = $request->elemhighestlevel;
        $employeesave->elementarybasiceducation = $request->elementarybasiceducation;
        $employeesave->vocationalhighestlevel = $request->vocationalhighestlevel;
        $employeesave->vocationalschool = $request->vocationalschool;
        $employeesave->graduatestudies = $request->graduatestudies;
        $employeesave->secondarybasiceducation = $request->secondarybasiceducation;
        $employeesave->vocationalbasiceducation = $request->vocationalbasiceducation;
        $employeesave->collegebasiceducation = $request->collegebasiceducation;
        $employeesave->graduatestudiesbasiceducation = $request->graduatestudiesbasiceducation;
        $employeesave->highestlevel = $request ->highestlevel;
        $employeesave->yeargradelementary = $request ->yeargradelementary;
        $employeesave->yeargradsecondary = $request ->yeargradsecondary;
        $employeesave->yeargradvocational = $request ->yeargradvocational;
        $employeesave->yeargradcollege = $request ->yeargradcollege;
        $employeesave->yeargradstudies = $request ->yeargradstudies;
        $employeesave->rating = $request ->rating;
        $employeesave->dateofexamination = $request ->dateofexamination;
        $employeesave->placeofexamination = $request ->placeofexamination;
        $employeesave->licensenumber = $request ->licensenumber;
        $employeesave->course = $request ->course;
        $employeesave->graduate = $request ->graduate;
        $employeesave->csc = $request ->csc;
        $employeesave->dateofissuance = $request ->dateofissuance;
        $employeesave->dateofvalidity = $request ->dateofvalidity;
        $employeesave->certification = $request ->certification;
        $employeesave->personnel = $request ->personnel;
        $employeesave->biometric = $request ->biometric;
        $employeesave->status = $request ->status;
        $employeesave->department = $request ->department;
        $employeesave->position = $request ->position;
        $employeesave->dateofjoining = $request ->dateofjoining;
        $employeesave->dateofleaving = $request ->dateofleaving;
        $employeesave->dateofretirement = $request ->dateofretirement;
        $employeesave->salary = $request ->salary;
        $employeesave->step = $request ->step;

        if($employeesave->save()) {
            return redirect()->back();
        }
    }

    public function editemployee(Request $request){
        $employee = Employee::where('id', $request->id)->first();
        $employees = Employee::orderBy('updated_at', 'asc')->get();

        return view('admin.employees.employee.update',[
            'employee'=>$employee,
            'employees'=>$employees
        ]);
    }

    public function updateemployee(Request $request){
        $Updatesave=Employee::where('id' ,$request->id)->first();
        $Updatesave->firstname = $request->firstname;
        $Updatesave->middlename = $request->middlename;
        $Updatesave->lastname = $request->lastname;
        $Updatesave->suffix = $request->suffix;
        $Updatesave->address = $request->address;
        $Updatesave->barangay = $request->barangay;
        $Updatesave->municipality = $request->municipality;
        $Updatesave->province = $request->province;
        $Updatesave->maritalstatus = $request->maritalstatus;
        $Updatesave->dateofbirth = $request->dateofbirth;
        $Updatesave->placeofbirth = $request->placeofbirth;
        $Updatesave->gender = $request->gender;
        $Updatesave->bloodtype = $request->bloodtype;
        $Updatesave->contactnumber = $request->contactnumber;
        $Updatesave->persontocontact = $request->persontocontact;
        $Updatesave->contact = $request->contact;
        $Updatesave->personalemail = $request->personalemail;
        $Updatesave->corporateemail = $request->corporateemail;
        $Updatesave->gsis = $request->gsis;
        $Updatesave->pagibig = $request->pagibig;
        $Updatesave->philhealth = $request->philhealth;
        $Updatesave->sss = $request->sss;
        $Updatesave->tin = $request->tin;
        $Updatesave->umid = $request->umid;
        $Updatesave->spousesurname = $request->spousesurname;
        $Updatesave->spousefirstname = $request->spousefirstname;
        $Updatesave->spousemiddlename = $request->spousemiddlename;
        $Updatesave->occupation = $request->occupation;
        $Updatesave->businessname = $request->businessname;
        $Updatesave->businessaddress = $request->businessaddress;
        $Updatesave->telephone = $request->telephone;
        $Updatesave->extension = $request->extension;
        $Updatesave->fathersurname = $request->fathersurname;
        $Updatesave->maidenname = $request->maidenname;
        $Updatesave->mothersurname = $request->mothersurname;
        $Updatesave->elementaryschool = $request->elementaryschool;
        $Updatesave->secondaryschool = $request->secondaryschool;
        $Updatesave->secondhighestlevel = $request->secondhighestlevel;
        $Updatesave->elemhighestlevel = $request->elemhighestlevel;
        $Updatesave->elementarybasiceducation = $request->elementarybasiceducation;
        $Updatesave->vocationalhighestlevel = $request->vocationalhighestlevel;
        $Updatesave->vocationalschool = $request->vocationalschool;
        $Updatesave->graduatestudies = $request->graduatestudies;
        $Updatesave->secondarybasiceducation = $request->secondarybasiceducation;
        $Updatesave->vocationalbasiceducation = $request->vocationalbasiceducation;
        $Updatesave->collegebasiceducation = $request->collegebasiceducation;
        $Updatesave->graduatestudiesbasiceducation = $request->graduatestudiesbasiceducation;
        $Updatesave->highestlevel = $request ->highestlevel;
        $Updatesave->yeargradelementary = $request ->yeargradelementary;
        $Updatesave->yeargradsecondary = $request ->yeargradsecondary;
        $Updatesave->yeargradvocational = $request ->yeargradvocational;
        $Updatesave->yeargradcollege = $request ->yeargradcollege;
        $Updatesave->yeargradstudies = $request ->yeargradstudies;
        $Updatesave->rating = $request ->rating;
        $Updatesave->dateofexamination = $request ->dateofexamination;
        $Updatesave->placeofexamination = $request ->placeofexamination;
        $Updatesave->licensenumber = $request ->licensenumber;
        $Updatesave->course = $request ->course;
        $Updatesave->graduate = $request ->graduate;
        $Updatesave->csc = $request ->csc;
        $Updatesave->dateofissuance = $request ->dateofissuance;
        $Updatesave->dateofvalidity = $request ->dateofvalidity;
        $Updatesave->certification = $request ->certification;
        $Updatesave->personnel = $request ->personnel;
        $Updatesave->biometric = $request ->biometric;
        $Updatesave->status = $request ->status;
        $Updatesave->department = $request ->department;
        $Updatesave->position = $request ->position;
        $Updatesave->dateofjoining = $request ->dateofjoining;
        $Updatesave->dateofleaving = $request ->dateofleaving;
        $Updatesave->dateofretirement = $request ->dateofretirement;
        $Updatesave->salary = $request ->salary;
        $Updatesave->step = $request ->step;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function viewemployee(Request $request){
        $employees=Employee::where('id',$request->id)->first();

        return view('admin.employees.employee.view',[
                'employees'=>$employees
        ]);
    }

    public function pds(Request $request){
        $employees=Employee::where('id',$request->id)->first();

        return view('admin.employees.employee.pds',[
                'employees'=>$employees
        ]);
    }

    public function permanentEmployees()
    {
        $permanentEmployees = $this->getpermanentEmployees();

        return view('admin.employees.permanent', compact('permanentEmployees'));
    }

    private function getpermanentEmployees()
    {
        return Employee::where('status', 'permanent')->get();
    }

    public function casualEmployees()
    {
        $casualEmployees = $this->getcasualEmployees();

        return view('admin.employees.casual', compact('casualEmployees'));
    }

    private function getcasualEmployees()
    {
        return Employee::where('status', 'casual')->get();
    }

    public function joborderEmployees()
    {
        $joborderEmployees = $this->getjoborderEmployees();

        return view('admin.employees.joborder', compact('joborderEmployees'));
    }

    private function getjoborderEmployees()
    {
        return Employee::where('status', 'job order')->get();
    }

    public function coterminousEmployees()
    {
        $coterminousEmployees = $this->getcoterminousEmployees();

        return view('admin.employees.coterminous', compact('coterminousEmployees'));
    }

    private function getcoterminousEmployees()
    {
        return Employee::where('status', 'co-terminous')->get();
    }

    public function electivesEmployees()
    {
        $electivesEmployees = $this->getelectivesEmployees();

        return view('admin.employees.electives', compact('electivesEmployees'));
    }

    private function getelectivesEmployees()
    {
        return Employee::where('status', 'electives')->get();
    }
}
