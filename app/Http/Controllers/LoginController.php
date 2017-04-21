<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class LoginController extends Controller
{
    public function index()
    {
    	return view('user/login');
    }
    public function exe_login(Request $request)
    {
    	$acc = $request->input('Account');
    	$pass= $request->input('Password');

    	$admin= DB::table('admin')->select('*')->where('account_ad',$acc)->get();
    	$user= DB::table('Users')->select('*')->where('Account',$acc)->get();
    	//var_dump($admin);die;
    	if(count($admin) != 0)
    	{
    		if($admin[0]->account_ad == $acc && $admin[0]->password_ad == $pass)
    		{
    			//var_dump($admin[0]->account_ad);die;
    			Session::put('admin',$acc);
    			
    			//var_dump($admin);die;
    			return redirect('admin');
    		}
    		else
    		{
    			echo "wrong account or password";
    		}
    	}
    	else 
    	{
    		if(count($user)!= 0)
    		{
    			//var_dump($user[0]->Password);die;
    			if($user[0]->Account == $acc && $user[0]->Password == $pass)
    			{
    				//var_dump($user[0]->account_ad);die;
					Session::put('user',$acc);
					
    				return redirect('/');
    			}
    			else
    			{
    				echo "wrong account or password";
    			}
    		}
    		else
    		{
    			echo "wrong account or password";
    		}
    	}
    }
    public function logout()
    {
        Session::flush();
        return redirect("/");
    }

}
