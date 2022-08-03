<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

	
	public function index()
	{
		
	}
	public function contact()
	{
		$template['page'] = 'contact';
		return view('frontend.template ', $template);
	}
	
	public function allmember()
	{
		$template['page'] = 'all-members';
		return view('frontend.template ', $template);
	}

	public function otp_verify_page(Request $request)
	{   
		$template['page'] = 'otp-verification';
		$email = $request->get('email');
		return view('frontend.template ', $template, compact('email'));
	} 

	public function setting()
	{
		$template['page'] = 'setting';
		return view('frontend.template ', $template);
	}

	public function otp_verification()
	{
		$template['page'] = 'otp-verification';
		return view('frontend.template ', $template);
	}

	
}
