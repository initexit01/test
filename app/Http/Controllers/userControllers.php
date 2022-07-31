<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use DB;

class userControllers extends Controller
{
    public function mainView(){
        $data=array();
        $data['qr']=userModel::get();
        echo view("main", $data);
    }
    public function add(){
        echo view('add');
    }

    public function store(Request $request){
            $data=$request->all();
            userModel::create($data);
            return redirect('');
    }

    public function destroy($id){
            $data=userModel::find($id);
            $data->delete();
            return redirect('/');
    }

    public function update_form($id){
        $data['qr']=userModel::find($id);
        echo view('update_form', $data);
    }

    public function modify(Request $request){
        $id=$request->id;
        $vi=$request->all();
        $data=userModel::find($id);
        $data->update($vi);
        // dd($data);
        return redirect('/');
    }
}
