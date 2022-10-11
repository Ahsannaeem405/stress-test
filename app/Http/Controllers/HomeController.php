<?php

namespace App\Http\Controllers;

use App\Models\Live;
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

    // Live Test Controllers Start

    public function live_test_index()
    {
        return view('live-test.live-test');
    }

    public function store_live_test(Request $request)
    {
        $live = new Live();
        $live->create([
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

        return redirect()->route('live-total')->with('success','Live test submitted successfully');
    }

    public function live_test_details_index()
    {
        return view('live-test.live-test-details');
    }

    public function live_test_review_index()
    {
        return view('live-test.live-test-review');
    }

    public function live_total_index()
    {
        $tests = Live::where('user_id',Auth::user()->id)->get();
        // dd($tests);
        return view('live-test.live-total',compact('tests'));
    }

    // Live Test Controllers End


    public function my_products_index()
    {
        return view('my-products');
    }

    // Stress Test Controllers Start

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
        $tests = Stress::where('user_id',Auth::user()->id)->get();
        // dd($tests);
        return view('stress-test.stress-total',compact('tests'));
    }

    // Stress Test Controllers End

    public function contact_us_index()
    {
        return view('contact-us');
    }
}
