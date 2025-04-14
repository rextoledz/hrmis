<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
       public function index()
    {
    	$notices = Notice::get();
        return view('admin.notice.index', [
            'notices'=>$notices
        ]);
    }

    public function storenotice(Request $request){
        $noticesave =new Notice();
        $noticesave->noticetitle = $request->noticetitle;
        $noticesave->publisheddate = $request->publisheddate;

        if($noticesave->save()) {
            return redirect()->back();
        }
    }

    public function editnotice(Request $request){
        $notice = Notice::where('id', $request->id)->first();
        $notices = Notice::orderBy('updated_at', 'asc')->get();

        return view('admin.notice.update',[
            'notice'=>$notice,
            'notices'=>$notices
        ]);
    }

    public function updatenotice(Request $request){
        $Updatesave=Notice::where('id' ,$request->id)->first();
        $Updatesave-> noticetitle =$request->noticetitle;
        $Updatesave-> publisheddate =$request->publisheddate;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deletenotice(Request $request){
        $Deletesave=Notice::where('id' ,$request->id)->first();
        $Deletesave-> noticetitle =$request->noticetitle;
        $Deletesave-> publisheddate =$request->publisheddate;
        
        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }
}
