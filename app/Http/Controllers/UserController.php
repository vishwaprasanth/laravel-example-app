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
}
