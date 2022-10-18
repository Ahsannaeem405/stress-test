<?php

namespace App\Http\Controllers;

use App\Models\Life;
use App\Models\Stress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

   //---------------------------------------------User life-Test Start---------------------------------------------//

    public function life_test_index()
    {
        return view('life-test.life-test');
    }

    public function store_life_test(Request $request)
    {
        $life = new Life();
        $life->create([
            'user_id' => Auth::user()->id,
            'personal' => $request->personal,
            'relationship' => $request->relationship,
            'family' => $request->family,
            'children' => $request->children,
            'working' => $request->working,
            'health' => $request->health,
            'leisure' => $request->leisure,
            'finance' => $request->finance,
        ]);

        return redirect()->route('life-total')->with('success','Life test submitted successfully');
    }

    public function life_test_details_index()
    {
        return view('life-test.life-test-details');
    }

    public function life_test_review_index()
    {
        return view('life-test.life-test-review');
    }

    public function life_total_index()
    {
        $tests = Life::where('user_id',Auth::user()->id)->orderBy('id','DESC')->first();
        return view('life-test.life-total',compact('tests'));
    }
//---------------------------------------------User life-Test End---------------------------------------------//


//---------------------------------------------User My-Test Start---------------------------------------------//
    public function my_test_index()
    {
        $lifes = Life::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        $stresses = Stress::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('my-tests.my-test',compact('lifes','stresses'));
    }

    public function my_life_test_review($id)
    {
        $life = Life::where('id',$id)->first();
        if($life)
        {
            return view('my-tests.my-life-test-review',compact('life'));
        }
    }

    public function my_stress_test_review($id)
    {
        $stress = Stress::select('flexRadioDefault','flexRadioDefault1','flexRadioDefault2','flexRadioDefault3','flexRadioDefault4','flexRadioDefault6','flexRadioDefault7','flexRadioDefault8','flexRadioDefault9','flexRadioDefault10','flexRadioDefault11','flexRadioDefault12','flexRadioDefault13','flexRadioDefault14','flexRadioDefault15','flexRadioDefault16','flexRadioDefault17','flexRadioDefault18','flexRadioDefault19','flexRadioDefault20','flexRadioDefault21','flexRadioDefault22','flexRadioDefault23')
        ->where('user_id',Auth::user()->id)->where('id',$id)->first();
        $make_array = $stress->toArray();
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
        if($stress)
        {
            return view('my-tests.my-stress-test-review',compact('stress','constant','frequently','sometime','rarely','never','total'));
        }
    }
//---------------------------------------------User My-Test Start---------------------------------------------//

//---------------------------------------------User Stress-Test Start---------------------------------------------//
    public function stress_test_index()
    {
        return view('stress-test.stress-test');
    }

    public function store_stress_test(Request $request)
    {
        $stress = new Stress();
        $stress->create([
            'user_id' => Auth::user()->id,
            'flexRadioDefault' => $request->flexRadioDefault,
            'flexRadioDefault1' => $request->flexRadioDefault1,
            'flexRadioDefault2' => $request->flexRadioDefault2,
            'flexRadioDefault3' => $request->flexRadioDefault3,
            'flexRadioDefault4' => $request->flexRadioDefault4,
            'flexRadioDefault6' => $request->flexRadioDefault6,
            'flexRadioDefault7' => $request->flexRadioDefault7,
            'flexRadioDefault8' => $request->flexRadioDefault8,
            'flexRadioDefault9' => $request->flexRadioDefault9,
            'flexRadioDefault10' => $request->flexRadioDefault10,
            'flexRadioDefault11' => $request->flexRadioDefault11,
            'flexRadioDefault12' => $request->flexRadioDefault12,
            'flexRadioDefault13' => $request->flexRadioDefault13,
            'flexRadioDefault14' => $request->flexRadioDefault14,
            'flexRadioDefault15' => $request->flexRadioDefault15,
            'flexRadioDefault16' => $request->flexRadioDefault16,
            'flexRadioDefault17' => $request->flexRadioDefault17,
            'flexRadioDefault18' => $request->flexRadioDefault18,
            'flexRadioDefault19' => $request->flexRadioDefault19,
            'flexRadioDefault20' => $request->flexRadioDefault20,
            'flexRadioDefault21' => $request->flexRadioDefault21,
            'flexRadioDefault22' => $request->flexRadioDefault22,
            'flexRadioDefault23' => $request->flexRadioDefault23,
        ]);
        return redirect()->route('stress-total')->with('success','Stress test submitted successfully');
    }

    public function stress_test_details_index()
    {
        return view('stress-test.stress-test-details');
    }

    public function stress_test_review_index()
    {
        return view('stress-test.stress-test-review');
    }

    public function stress_total_index()
    {
        $tests = Stress::select('flexRadioDefault','flexRadioDefault1','flexRadioDefault2','flexRadioDefault3','flexRadioDefault4','flexRadioDefault6','flexRadioDefault7','flexRadioDefault8','flexRadioDefault9','flexRadioDefault10','flexRadioDefault11','flexRadioDefault12','flexRadioDefault13','flexRadioDefault14','flexRadioDefault15','flexRadioDefault16','flexRadioDefault17','flexRadioDefault18','flexRadioDefault19','flexRadioDefault20','flexRadioDefault21','flexRadioDefault22','flexRadioDefault23')
        ->where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->first();
        // dd($tests);
        $make_array = $tests->toArray();
        $check_count = array_count_values($make_array);
        // dd($check_count);
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
        return view('stress-test.stress-total',compact('constant','frequently','sometime','rarely','never','total'));
    }

    //---------------------------------------------User Stress-Test End---------------------------------------------//

    public function contact_us_index()
    {
        return view('contact-us');
    }
}
