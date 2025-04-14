<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployeeController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
        Route::get('/', function () {
            return redirect('/login');
        });
        Route::group(['middleware' => ['guest']], function() {
            Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
            Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');  

        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');

            Route::get('/ams', [App\Http\Controllers\ams\amsController::class, 'index'])->name('ams');
            Route::get('/printdtr', [App\Http\Controllers\ams\PrintDTRController::class, 'index'])->name('printdtr.index');
            Route::get('/printdtralt/{id}/{startdate}/{enddate}', [App\Http\Controllers\ams\PrintDTRController::class, 'printdtr_alt'])->name('printdtr.alt');
            Route::get('/printdtr/{id}/{month}/{year}', [App\Http\Controllers\ams\PrintDTRController::class, 'printdtr'])->name('printdtr');
            Route::get('/searchByDepartment', [App\Http\Controllers\ams\dtrSrchByDptController::class, 'searchByDepartment'])->name('searchByDpt');
            Route::get('/attendances', [App\Http\Controllers\ams\attendancesController::class, 'index'])->name('attendances');

            Route::get('/attendances/{biometric}', [App\Http\Controllers\ams\attendancesController::class, 'showWorkingHoursList'])->name('attendancesworkinghours');

            // Route::get('/attendances/{employeeId}', [App\Http\Controllers\ams\attendancesController::class, 'showWorkingHoursList'])->name('attendancesworkinghours');

            // routes/web.php

            Route::post('/attendances/import/csv', [App\Http\Controllers\ams\attendancesController::class, 'import_csv'])->name('importcsv');

            #ADD USER
            Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
            Route::post('/register', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

            #EMPLOYEES-EMPLOYEE
            Route::get('/admin/employees/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'employeeemployees'])->name('employee.employees');
            Route::get('/admin/employees/permanent', [App\Http\Controllers\Admin\EmployeeController::class, 'permanentEmployees'])->name('employees.permanent');
            Route::get('/admin/employees/casual', [App\Http\Controllers\Admin\EmployeeController::class, 'casualEmployees'])->name('employees.casual');
            Route::get('/admin/employees/joborder', [App\Http\Controllers\Admin\EmployeeController::class, 'joborderEmployees'])->name('employees.joborder');
            Route::get('/admin/employees/co-terminous', [App\Http\Controllers\Admin\EmployeeController::class, 'coterminousEmployees'])->name('employees.coterminous');
            Route::get('/admin/employees/electives', [App\Http\Controllers\Admin\EmployeeController::class, 'electivesEmployees'])->name('employees.electives');

            //add
            Route::get('/employees/employee/add', [App\Http\Controllers\Admin\EmployeeController::class, 'addemployee'])->name('employee.add');
            Route::post('/employees/employee/store', [App\Http\Controllers\Admin\EmployeeController::class, 'storeemployee'])->name('employee.store');

            //Update
            Route::get('/employee/index/edit/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'editemployee'])->name('employee.edit');
            Route::post('/employee/index/edit/store', [App\Http\Controllers\Admin\EmployeeController::class, 'updateemployee'])->name('employee.edit.store');

            //View
            Route::get('/employee/index/view/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'viewemployee'])->name('employee.view');
            Route::post('/employee/index/view', [App\Http\Controllers\Admin\EmployeeController::class, 'viewemployee'])->name('employee.edit.view');

            //PDS
            Route::get('/employee/index/pds/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'pds'])->name('pds');
            Route::post('/employee/index/pds', [App\Http\Controllers\Admin\EmployeeController::class, 'pds'])->name('pds');

            #LEAVE-HOLIDAY
           Route::get('/leave/holiday', [App\Http\Controllers\Admin\HolidayController::class, 'holidayleave'])->name('leave.holiday');
            Route::post('/leave/holiday/store', [App\Http\Controllers\Admin\HolidayController::class, 'storeholiday'])->name('holiday.store');

            //Update
            Route::get('/holiday/index/edit/{id}', [App\Http\Controllers\Admin\HolidayController::class, 'editholiday'])->name('holiday.edit');
            Route::post('/holiday/index/edit/store', [App\Http\Controllers\Admin\HolidayController::class, 'updateholiday'])->name('holiday.edit.store');

            //Delete
            Route::get('/holiday/index/delete/{id}', [App\Http\Controllers\Admin\HolidayController::class, 'deleteholiday'])->name('holiday.delete');
            Route::post('/holiday/index/delete', [App\Http\Controllers\Admin\HolidayController::class, 'deleteholiday'])->name('holiday.delete');

            #LEAVE-LEAVE APPLICATION
            Route::get('/leaveapplication', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'index'])->name('leaveapplication');
            
            //Approve
            Route::get('/leaveapplication/approve/{id}', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'approve'])->name('approve');
            Route::post('/leaveapplication/approve', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'approve'])->name('approve');

            //Reject
            Route::get('/leaveapplication/reject/{id}', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'reject'])->name('reject');
            Route::post('/leaveapplication/reject', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'reject'])->name('reject');

            //Update
            Route::get('/leaveapplication/index/edit/{id}', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'editleaveapplication'])->name('leaveapplication.edit');
            Route::post('/leaveapplication/index/edit/store', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'updateleaveapplication'])->name('leaveapplication.edit.store');

            //View
            Route::get('/leaveapplication/index/view/{id}', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'viewleaveapplication'])->name('leaveapplication.view');
            Route::post('/user/leaveapplication/index/view', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'viewleaveapplication'])->name('leaveapplication.edit.view');

            #LEAVE-EARNED LEAVE
             Route::get('/leave/earnedleave', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'earnedleaveleave'])->name('leave.earnedleave');
            Route::post('/leave/earnedleave/store', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'storeearnedleave'])->name('earnedleave.store');

            #LEAVE-REPORT
            Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report');

            #NOTICE
            Route::get('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'index'])->name('notice');
            Route::post('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'storenotice'])->name('notice.store');

            //Update
            Route::get('/notice/index/edit/{id}', [App\Http\Controllers\Admin\NoticeController::class, 'editnotice'])->name('notice.edit');
            Route::post('/notice/index/edit/store', [App\Http\Controllers\Admin\NoticeController::class, 'updatenotice'])->name('notice.edit.store');

            //Delete
            Route::get('/notice/index/delete/{id}', [App\Http\Controllers\Admin\NoticeController::class, 'deletenotice'])->name('notice.delete');
            Route::post('/notice/index/delete', [App\Http\Controllers\Admin\NoticeController::class, 'deletenotice'])->name('notice.delete');

            #SETTINGS
            Route::get('/accountsetting', [App\Http\Controllers\Admin\AccountSettingController::class, 'accountsetting'])->name('setting.account');
            Route::post('/accountsetting/store', [App\Http\Controllers\Admin\AccountSettingController::class, 'storeaccountsetting'])->name('accountsetting.store');
        });

       
        #USER
        Route::group(['middleware' => ['user']], function () {
            Route::get('/user', [App\Http\Controllers\User\UserController::class, 'index'])->name('userdashboard');
             Route::get('user/dashboard/notice', 'UserController@showNoticeBoard');

             #NOTICE
            Route::get('/user/notice', [App\Http\Controllers\User\NoticeController::class, 'index'])->name('usernotice');
            
             #LEAVE-HOLIDAY
            Route::get('/user/holiday', [App\Http\Controllers\User\HolidayController::class, 'holidayleave'])->name('userleave.holiday');

            #LEAVE-EARNED LEAVE
             Route::get('/user/leave/earnedleave', [App\Http\Controllers\User\EarnedLeaveController::class, 'earnedleaveleave'])->name('userleave.earnedleave');

            #LEAVE-LEAVE APPLICATION
             Route::get('/user/leaveapplication', [App\Http\Controllers\User\LeaveApplicationController::class, 'index'])->name('userleaveapplication');

            //add
            Route::get('/user/leaveapplication/add', [App\Http\Controllers\User\LeaveApplicationController::class, 'addleaveapplication'])->name('userleaveapplication.add');
            Route::post('/user/leaveapplication/store', [App\Http\Controllers\User\LeaveApplicationController::class, 'storeleaveapplication'])->name('leaveapplication.store');

            //View
            Route::get('/user/leaveapplication/index/view/{id}', [App\Http\Controllers\User\LeaveApplicationController::class, 'viewleaveapplication'])->name('userleaveapplication.view');
            Route::post('/user/leaveapplication/index/view', [App\Http\Controllers\User\LeaveApplicationController::class, 'viewleaveapplication'])->name('userleaveapplication.edit.view');

            #MYPROFILE
            Route::get('/user/myprofile', [App\Http\Controllers\User\EmployeeController::class, 'viewemployee'])->name('useremployee.view');

            //Update
            Route::get('/user/myprofile/index/edit/{id}', [App\Http\Controllers\User\EmployeeController::class, 'editemployee'])->name('useremployee.edit');
            Route::post('/user/myprofile/index/edit/store', [App\Http\Controllers\User\EmployeeController::class, 'updateemployee'])->name('useremployee.edit.store');
        });
});
