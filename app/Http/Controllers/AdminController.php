<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $complaint = Complaint::all();
        $comps = Complaint::orderByDesc('created_at')->limit(5)->get();
        return view('admin.index',compact('user', 'complaint', 'comps'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function authe()
    {
        $data = request()->validate([
            'email' => 'required',
            'password' => 'required|min:1',
        ]);
        $email = request("email");
        $password = request("password");
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect("/conadmin");
        }
    }
    public function comp()
    {
        $user = Auth::user();
        $complaint = Complaint::orderByDesc('created_at')->get();
        return view('admin.complaints',compact('user', 'complaint'));
    }
    public function delete($id)
    {
        Complaint::where('id', $id)->delete();
        return redirect()->back()->with('msg', 'Complain deleted successfully!');
    }
    public function account()
    {
        $user = Auth::user();
        return view('admin.account',compact('user'));
    }
}
