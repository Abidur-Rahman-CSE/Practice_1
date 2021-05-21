<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class UserController extends Controller
{
    //
    public function formSubmit(Request $req){
        
        print_r($req->input());
    }

    function addData(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->phn = $req->phn;
        $member->status = $req->status;
        $member->save();
        return redirect('add');
    }
    function showData(){
        // return DB::select('select * from members');
       $members= Member::all();
       return view('Showpage', compact('members'));
    }
    function showMarried(){
        // return DB::select('select * from members');
       $members= Member::where('status', 1)->get();
       return view('Showpage', compact('members'));
    }
    function showUnmarried(){
        // return DB::select('select * from members');
       $members= Member::where('status', 0)->get();
       return view('Showpage', compact('members'));
    }




    function delete($id){
        // return DB::select('select * from members');
       $member= Member::find($id);
       $member->delete();
       return redirect('show');
       
    }
    function edit($id){
        // return DB::select('select * from members');
       $member= Member::find($id);
       return view('edit',compact('member'));
       
    }


}
