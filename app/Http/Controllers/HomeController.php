<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
use App\Notifications\PostLikeNotification;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(Request $request)
	{   
	    $id = Auth::user()->id;	   
		$user_data=DB::table('profile')->where('user_id', $id)->first();
		
			$looking = $user_data->looking_for;

		//$looking = $user_data->looking_for;
		
		$arrdata=DB::table('profile')->where('gender', $looking)->get();
		$template['page'] = 'dashboard';
		return view('frontend.template ', $template, compact('arrdata'));
	}


	
	 public function profile(Request $request)
	{
		$user_id = Auth::user()->id;
		$data  = DB::table('profile')->where('user_id', $user_id)->first();
		$template['page'] = 'profile';
		return view('frontend.template ', $template, compact('data'));
	}
	
	public function update_profile(Request $request)
	{
		 $user_id = Auth::user()->id;
		
     		
		$data = $request->except(['_token', '_method']);
		//print_r($data); die;
  if ($request->hasFile('cover_img')) {
                    $destination_path='public/profile';
                    $image=$request->file('cover_img');
                    $image_name=$image->getClientOriginalName();
                    $image_name=time().'_'.$user_id.'.jpg';
                    $path=$request->file('cover_img')->storeAs($destination_path,$image_name);
                    
                $data['cover_img']=$image_name;
              } 
			if ($request->hasFile('profile_img')) {
                    $destination_path='public/profile';
                    $image=$request->file('profile_img');
                    $image_name=$image->getClientOriginalName();
                    $image_name=time().'_'.$user_id.'.jpg';
                    $path=$request->file('profile_img')->storeAs($destination_path,$image_name);
                    
                $data['profile_img']=$image_name;
              }
			  if ($request->hasFile('profile_img')) {
                    $destination_path='public/profile';
                    $image=$request->file('profile_img');
                    $image_name=$image->getClientOriginalName();
                    $image_name=time().'_'.$user_id.'.jpg';
                    $path=$request->file('profile_img')->storeAs($destination_path,$image_name);
                    
                $data1['image']=$image_name;
				
              }
	
                    DB::table('users')->where(['id' => $user_id])->update([
					   'name'=> $data['name'] ?? '',
					]);
		DB::table('profile')->where(['user_id' => $user_id])->update($data);
		return redirect()->back()->with(Session::flash('success', 'Profile Updated Successfully'));
	
	}
	
	public function all_suggestion_profile()
	{
		
		$gender = Auth::user()->gender;
	
		if($gender == 'Man'){
		    $arrdata=DB::table('users')->where('gender', 'Woman')->get();
		}elseif($gender == 'Woman'){
			$arrdata=DB::table('users')->where('gender', 'Man')->get();
		}
		//print_r($arrdata); die;
		$template['page'] = 'all-suggestion-profile';
		return view('frontend.template ', $template, compact('arrdata'));
	}
	
	public function all_suggestion_profile_details($id)
	{
		$arrdatadetails=DB::table('profile')->where('user_id', $id)->first();
		$arrdatadetail=DB::table('users')->where('id', $id)->first();
		//dd($arrdatadetails);
		$template['page'] = 'all-suggestion-profile-details';
		return view('frontend.template ', $template, compact('arrdatadetails','arrdatadetail'));
		
	}

	// public function otp_verification()
	// {
	// 	$template['page'] = 'otp-verification';
	// 	return view('frontend.template ', $template);
	// }

	public function index1()
	{
       $posts = Post::where('user_id',auth()->user()->id)->with('user')->get();
	   Log::info($posts);

	   return view('home',['posts'=>$posts]);
	}

	public function postLike(Request $request){
        $user = auth()->user();

        $post = Post::whereId($request->post_id)->with('user')->first();
        // like code -----skip
        $author = $post->user;

        if($author){
            $author->notify(new PostLikeNotification($user,$post));
        }

        return response()->json(['success']);
    }

}
