<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Image;
class ManagerProfileController extends Controller
{
    public function profile(){
    	return view('manager.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			// storage_path('app/public/avatars')
    		// Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename ) );
    		Image::make($avatar)->resize(300, 300)->save(storage_path('app/public/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = '/storage/avatars/'.$filename;
    		$user->save();
    	}

			return view('administrator.profile', array('user' => Auth::user()) );




    }
}

