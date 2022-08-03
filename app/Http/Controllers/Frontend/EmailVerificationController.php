<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\EmailVerify;

use Validator;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;


class EmailVerificationController extends Controller
{

 public function requestOtp(Request $request)
 {

        $otp = rand(1000,9999);
        $user = User::where('email','=',$request->email)->update(['otp' => $otp]);
        $user = User::where('email','=',$request->email)->get()->first();

        if($user){
        // send otp in the email
        $mail_details = [
            'subject' => 'Testing Application OTP',
            'body' => 'Your OTP is : '. $otp
        ];
        Mail::to($request->email)->send(new EmailVerify($user['name'],$otp));
       
         return response(["status" => 200, "message" => "OTP sent successfully"]);
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }


    public function verifyOtp(Request $request){


        $user  = User::where([['email','=',$request->email],['otp','=',$request->otp]])->first();
        if($user){
           
            User::where('email','=',$request->email)->update(['otp' => null,'is_verified' => true]);
            $user = User::where('email','=',$request->email)->get()->first();
            $email = $user['email'];
            return view('Auth/login-confirm',compact('email'));
        }
        else{
            Log::info($request->email);
            Log::info($request->otp);
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }

}

