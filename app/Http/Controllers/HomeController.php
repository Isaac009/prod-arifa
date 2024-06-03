<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\Project;
use App\Models\Sponsor;
use App\Mail\ContactMail;
use App\Models\Institute;
use App\Models\Objective;
use App\Models\MemberGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $institute = Institute::latest()->take(1)->first();
        if(is_null($institute)){
            return redirect()->route('fallback');
        }
        $projects = Project::latest()->take(8)->get();
        $team = Member::take(4)->get();
        $sponsors = Sponsor::all();
        $events = Event::latest()->take(3)->get();
        Session::flash('message', 'Welcome to ARIFA!');
        return view('homepage', compact('institute','projects','team','sponsors', 'events'));
    }

    public function about(){
        $institute = Institute::latest()->take(1)->first(['name','about']);
        $sponsors = Sponsor::all();
        return view('frontend.about',compact('institute','sponsors'));
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function team(){
        // $members = Member::all();
        $groups = MemberGroup::with('members')->get();
        $sponsors = Sponsor::all();
        return view('frontend.team', compact('groups', 'sponsors'));
    }

    public function team_member_details(Member $member){
        return view('frontend.team.show', compact('member'));
    }

    public function objectives(){
        $objectives = Objective::all();
        return view('frontend.objectives',compact('objectives'));
    }

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('info@arifa.org')->send(new ContactMail($details));

        return back()->with('message', 'Your message has been sent successfully!');
    }
}
