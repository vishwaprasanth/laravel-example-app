<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function Register(Request $request){
        $Regitervalue = new Register;
        $Regitervalue->addNew($request->all());
        return redirect('home')->with('success', 'Resume submitted successfully!');;


    }
    function view(){
        $Register = new Register;
        $view = $Register->getAll();
        return view('view', ['registers' => $view]);
    }
    function delete($id){
        Register::where('id',$id)->delete();

		return redirect('view')->with('delete','Record Deleted Successfully.');
    }
    function edit($id)
    {
        $data = Register::find($id);
        return view('edit', ['data' => $data]);
    }
    function update($id, Request $request){
        $Register = Register::find($id);
        $Register->name = $request['name'];
        $Register->email = $request['email'];
        $Register->password = $request['password'];
    }
}
