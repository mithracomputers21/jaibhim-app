<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\District;
use App\Models\Block;
use App\Models\Village;
use App\Models\Habitation;
use App\Models\MemberLibrary;
use App\Models\MemberPayment;
use Illuminate\Support\Facades\DB;
use App\Mail\EventMail;
use Mail;

class JaibhimController extends Controller
{
    public function ambassadors(Request $request)
    {
        $members = DB::table('members')
        ->join('member_libraries', 'members.id', '=', 'member_libraries.member_id')
        ->get();

        return view('ambedkariyam-ambassadors', compact('members'));
    }
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $email = 'hello@jaibhimfoundation.net';
 
        $body = [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'subject'=>$data['subject'],
            'message'=>$data['message'],
        ];
 
        Mail::to($email)->send(new EventMail($body));
        return back()->with('status','Thanks for your Interest! We will get back to you!');;
    }
    public function registration(Request $request)
    {
        return view('jaibhimfoundation-register');
    }
}
