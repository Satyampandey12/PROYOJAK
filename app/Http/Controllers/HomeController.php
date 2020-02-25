<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Event\Event;
use Carbon\Carbon;
use App\Models\Event\EventInvitee;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

  
    public function dashboard()
    {
        $logged_in_user_details = Auth::user();
        $total_users = User::where('role_id','2')->count();
        if($logged_in_user_details->role_id ==2){
             $today = Carbon::now()->format('Y-m-d');

            $upcomingEvents = Event::where('end_date', '>', $today)
            ->where('user_id',$logged_in_user_details->id)
            ->orderBy('start_date', 'desc')
            ->get();

            $pastEvents = Event::where('end_date', '<', $today)
            ->where('user_id',$logged_in_user_details->id)
            ->orderBy('start_date', 'desc')
            ->limit(3)
            ->get();
            $my_events_ids  = Event::select('id')->where('user_id',$logged_in_user_details->id)->get()->toArray();

            $event_invitee_users_count = EventInvitee::whereIn('event_id',$my_events_ids)->count();

            
         return view('template.admin.pages.dashboard')
            ->with('upcomingEvents', $upcomingEvents)
            ->with('pastEvents', $pastEvents)->with('event_invitee_user_count',$event_invitee_users_count)->with('total_users', $total_users );

        

        }else{
            $today = Carbon::now()->format('Y-m-d');

            $upcomingEvents = Event::where('end_date', '>', $today)
            ->orderBy('start_date', 'desc')
            ->get();

              $pastEvents = Event::where('end_date', '<', $today)
            ->orderBy('start_date', 'desc')
            ->limit(3)
            ->get();

            $event_invitee_users_count = EventInvitee::count();

            return view('template.admin.pages.dashboard')
            ->with('upcomingEvents', $upcomingEvents)
            ->with('pastEvents', $pastEvents)->with('event_invitee_user_count',$event_invitee_users_count)
            ->with('total_users', $total_users );
        }
        
    }
}
