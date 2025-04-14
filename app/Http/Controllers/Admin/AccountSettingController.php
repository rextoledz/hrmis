<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accountsetting;

class AccountSettingController extends Controller
{
    public function accountsetting(){
        return view('admin.accountsetting.index');
    }

    public function storeaccountsetting(Request $request){
        $accountsettingsave = new Accountsetting();
        $accountsettingsave->copyright = $request->copyright;
        $accountsettingsave->email = $request->email;
        $accountsettingsave->address = $request->address;
        $accountsettingsave->contactnumber = $request->contactnumber;

         if($accountsettingsave->save()) {
             return redirect()->back();
        }
    }

}
