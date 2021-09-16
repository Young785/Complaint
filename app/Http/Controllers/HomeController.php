<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

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
    public function comp()
    {
        $data = request()->validate([
            'name' => 'required',
            'location' => 'required',
            'information' => 'required',
        ]);
        $data['created_at'] = NOW();
        $data['updated_at'] = NOW();
        $check = Complaint::insert([$data]);
        return redirect('/')->with('msg', 'Your complaint has been sent, We will get back to you soon!');
    }
}
