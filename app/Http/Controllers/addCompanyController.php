<?php

namespace App\Http\Controllers;
use App\Models\StoreData;
use Illuminate\Http\Request;
use App\Models\Contact;
use Nexmo;
class addCompanyController extends Controller
{
    public function addCompany()
    {
        return view('AddCompany.addCompany');
    }
    public function addData(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
        ]);
        
        
        StoreData::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);
        return view('AddCompany.RegisterCompany');
    }

    public function create(){
        return view('backend.user.create');
    }
    public function store(Request $request){
        $code=rand(1111,9999);


        $user=new Contact;
        $user->phone=$request->phone;
        $user->code=$code;
        $user->save();

        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+91'.(int) $request->phone,
            'from'=> 'A KHAN',
            'text'=>'Verify code: '.$code,
        ]);

         return redirect('/verify');
    }
    public function GetVery(){
        return view('backend.user.getverify');
    }
    public function PostVery(Request $req){
        $check=Contact::where('code',$req->code)->first();
         if( $check){
             $check->code=$req->code;
             $check->save();
             return redirect('/');
         }
         else{
             return back()->withMessage('Verify code is not correct');
         }
    }
}
