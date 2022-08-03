<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class SocialAuthController extends Controller
{
    public function facebookRedirect()
	{
		return Socialite::driver('facebook')->redirect();
	}
	
	 public function facebookCallback()
	{
		
		try{
		$user = Socialite::driver('facebook')->stateless()->user();
//dd($user);
		
		    $saveUser = User::updateOrCreate([
			    'provider_id' => $user->getId(),
				],[
				    'name' => $user->getName(),
					'email' => $user->getEmail(),
					
				]
				);
				
				Auth::loginUsingId($saveUser->id);
				
				return redirect()->route('home');
		     //dd($user);
			 
		}catch(Exception $e){
			dd($e->getMessage());
		}
	}
	
	public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
	
	public function googleCallback()
    {
		
		try{
		$user = Socialite::driver('google')->stateless()->user();
          $provider_id = $user->getId();
		
		  $check_user=DB::table('users')->select('*')->where('provider_id',$user->id)->count();
	 
			if($check_user>0)
			{
			$get_user=DB::table('users')->select('*')->where('provider_id',$user->id)->get();
		    
			foreach($get_user as $user_get){
				$id = $user_get->id;
			}
			$check_profile=DB::table('profile')->select('*')->where('user_id',$id)->count();
			if($check_profile>0){
			$saveUser = User::updateOrCreate([
			    'provider_id' => $user->getId(),
				],[
				    'name' => $user->getName(),
					'email' => $user->getEmail(),
					'password' => 'asg23fcfchg'
				]
				);
				
				Auth::loginUsingId($saveUser->id);
				
				return redirect()->route('home');
			}else{
				return view('Auth/login-social',compact('provider_id'));
			}
		  
			}else{
				  $saveUser = User::updateOrCreate([
			    'provider_id' => $user->getId(),
				],[
				    'name' => $user->getName(),
					'email' => $user->getEmail(),
					'password' => 'asg23fcfchg'
				]
				);
				return view('Auth/login-social',compact('provider_id'));
			}
		}catch(Exception $e){
			dd($e->getMessage());
		}
	}
	
	public function googleLogin(Request $request)
	{
		//dd($looking_for);
		$gender = $request->gender; 
		$looking_for = $request->looking_for; 
		$provider_id = $request->provider_id;
		$marital_status = $request->marital_status;
		$dob = $request->dob;
		$smoking = $request->smoking;										
	    $height = $request->height;						
		$body_type = $request->body_type;
		$education = $request->education;
		$religion = $request->religion;
		
	
		//dd($gender); die;
		if($gender == 'Male'){
			   $image = 'men-1.jpg';
	      }elseif($gender == 'Female'){
			  $image = 'girl-1.jpg';
		  }
		  
		 // $update=DB::table('users')->where('provider_id',$provider_id)->update(['gender'=>$gender,'image'=>$image, 'looking_for'=>$looking_for]);
		  $check_user=DB::table('users')->select('*')->where('provider_id',$provider_id)->get();
				
				foreach($check_user as $user_check){
				$user_id = $user_check->id;
				$user_name = $user_check->name;
			     }
				 
				 $profile = DB::table('profile')->insert([
						'user_id'=> $user_id,						
						'profile_img'=> $image,
						'name'=> $user_name,
						'gender'=> $gender,
						'looking_for'=> $looking_for,
						'marital_status'=> $marital_status,
						'dob'=> $dob,																					
						'smoking'=> $smoking,											
						'height'=> $height,						
						'body_type'=> $body_type,
						'education'=> $education,
						'religion'=> $religion
				 ]);				 
				Auth::loginUsingId($user_id);

				
				return redirect()->route('home');
	}
}
