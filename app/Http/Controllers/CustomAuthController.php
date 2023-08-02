<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function Resistration(){
        return view('resistration') ;
    }
    public function Login(){
        return view('login');
    }
    
    public function Resister_User(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = "user";
        $user->password = Hash::make($request->password); 
        $res = $user->save();
        if($res){
            return back()->with('success','you have registared successfully ');
        }else{
            return back()->with('error', 'somethig wrong ');

        }

    }

    public function Login_user(Request $request){
       $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
              $request->session()->put('login_id',$user->id);
              return redirect('/shop');  
            }else{
                return back()->with('fail','password not matches');
            }
             
        }else{
            return back()->with('fail','this email is not found ');
        }
       

    }
    public function Dashbord(){
        $data = array();
        
    
        if (session()->has('login_id')) {
            $login_id = session()->get('login_id');
            $user = User::where('id', '=', $login_id)->first();
    
            if ($user) {
                $data['user'] = $user; // Pass the user data to the view
                return view('dashbord', $data);
            }
        }
       
    
    }
    public function logout(){
        if(session()->has('login_id')){
            session()->pull('login_id');
            return redirect('login');
        }
    }
}
