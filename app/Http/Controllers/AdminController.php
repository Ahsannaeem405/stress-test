<?php

namespace App\Http\Controllers;

use App\Models\Live;
use App\Models\Stress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //---------------------------------------------Admin Dashboard Start---------------------------------------------//
    public function dashboard_index()
    {
        $stress = Stress::count();
        $live = Live::count();
        return view('admin.dashboard',compact('stress','live'));
    }
    //--------------------------------------------- Admin Dashboard End---------------------------------------------//


    //---------------------------------------------Admin Users Start---------------------------------------------//
    public function users_index()
    {
        $users = User::where('role','user')->get();
        return view('admin.users',compact('users'));
    }

    public function edit_users($id)
    {
        $user = User::where('id',$id)->first();
        if($user)
        {
            return view('admin.edit-user',compact('user'));
        }
    }

    public function update_user(Request $request)
    {
        $user = User::findorfail($request->id);
        {
            if($user)
            {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->save();
                return redirect()->route('users')->with('success','User Updated Successfully');
            }
        }
    }

    public function delete_user($id)
    {
        $user = User::where('id',$id)->first();
        if($user)
        {
            $user->delete();
            return back()->with('success', 'User Deleted Successfully');
        }
    }

    public function approve_user($id)
    {
        $user = User::where('id',$id)->first();
        if($user)
        {
            if($user->status==0)
            {
                $user->status=1;
                $user->save();
            }
            return back()->with('success','User Approved Successfully');
        }
        else
        {
            return back()->with('error','Something went wrong please try later !');
        }
    }
    //--------------------------------------------- Admin Users End---------------------------------------------//


    //--------------------------------------------- Admin Live Tests Start---------------------------------------------//
    public function live_tests_index()
    {
        $tests = DB::table('lives')
        ->leftjoin('users','lives.user_id','=','users.id')
        ->where('role','user')
        ->get();
        return view('admin.live-tests',compact('tests'));
    }

    public function live_test_review($id)
    {
        $live = Live::where('user_id',$id)->first();
        return view('admin.live-test-review',compact('live'));
    }

    public function live_test_delete($id)
    {
        $user = Live::where('user_id',$id)->first();
        if($user)
        {
            $user->delete();
            return back()->with('success','Record Deleted Successfully');
        }
    }
    //--------------------------------------------- Admin Live Tests End---------------------------------------------//

    //--------------------------------------------- Admin Stress Tests Start---------------------------------------------//
    public function stress_tests_index()
    {
        $tests = DB::table('users')
        ->where('role','user')
        ->leftJoin('stress','users.id','=','stress.user_id')
        ->get();
        // dd($tests);
        return view('admin.stress-tests',compact('tests'));
    }

    public function stress_test_review($id)
    {
        $live = Stress::select('flexRadioDefault','flexRadioDefault1','flexRadioDefault2','flexRadioDefault3','flexRadioDefault4','flexRadioDefault6','flexRadioDefault7','flexRadioDefault8','flexRadioDefault9','flexRadioDefault10','flexRadioDefault11','flexRadioDefault12','flexRadioDefault13','flexRadioDefault14','flexRadioDefault15','flexRadioDefault16','flexRadioDefault17','flexRadioDefault18','flexRadioDefault19','flexRadioDefault20','flexRadioDefault21','flexRadioDefault22','flexRadioDefault23')
        ->where('id',$id)->first();
        // dd($live);
        $make_array = $live->toArray();
        $check_count = array_count_values($make_array);
        if(isset($check_count[4]))
        {
            $constant = ($check_count[4]*4);
        }
        else 
        {
            $constant=0;
        }
        if(isset($check_count[3]))
        {
            $frequently = ($check_count[3]*3);
        }
        else
        {
            $frequently=0;
        }
        if(isset($check_count[2]))
        {
            $sometime = ($check_count[2]*2);
        }
        else
        {
            $sometime=0;
        }
        if(isset($check_count[1]))
        {

            $rarely = ($check_count[1]*1);
        }
        else
        {
            $rarely=0;
        }
        if(isset($check_count[1]))
        {
            $never = ($check_count[0]*0);
        }
        else
        {
            $never=0;
        }
        $total = ($constant+$frequently+$sometime+$rarely+$never);
        return view('admin.stress-test-review',compact('live','constant','frequently','sometime','rarely','never','total'));
    }

    public function stress_test_delete($id)
    {
        $user = Stress::where('user_id',$id)->first();
        if($user)
        {
            $user->delete();
            return back()->with('success','Record Deleted Successfully');
        }
    }
    //--------------------------------------------- Admin Stress Tests End---------------------------------------------//

    //--------------------------------------------- Admin Settings Start---------------------------------------------//
    public function settings_index()
    {
        $user = User::where('role','admin')->first();
        return view('admin.settings',compact('user'));
    }
    public function update_profile(Request $request)
    {
        // dd($request);
        $profile = User::findorfail($request->id);
        if($profile)
        {
            if($file=$request->hasfile('image'))
            {
                $file=$request->file('image');
                $fileName=uniqid().$file->getClientOriginalName();
                $destinationPath=public_path().'/upload-images/';
                $file->move($destinationPath,$fileName);
                $request->image=$fileName;
            }
            // Common Fields Start //
            $profile->image = $request->image;
            $profile->name = $request->name;
            $profile->email = $request->email;
            // Common Fields End //
            $profile->save();
            return back()->with('success','Profile has been Updated');
        }
    }
    public function update_password(Request $request)
    {
        # Validation
        // $request->validate([
        //     'old_password' => 'required',
        //     'new_password' => 'required|confirmed',
        // ]);
        if(empty($request->old_password) || empty($request->new_password))
        {
            return back()->with("error", "Old Password and New Password fields are Required");
        }
        if($request->new_password != $request->new_password_confirmation)
        {
            return back()->with("error", "New Password Doesn't match with Confirm Password");
        }
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("success", "Password changed successfully!");
    }
    //--------------------------------------------- Admin Settings End---------------------------------------------//
}
