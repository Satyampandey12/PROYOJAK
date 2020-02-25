<?php

namespace App\Http\Controllers\Event;

use App\Models\Event\Event;
use App\Models\Event\EventInvitee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\User;  
use DB; 

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');
        $upcomingEvents = Event::where('end_date', '>', $today)
            ->orderBy('start_date', 'desc')
            ->get();
        $pastEvents = Event::where('end_date', '<', $today)
            ->orderBy('start_date', 'desc')
            ->limit(3)
            ->get();

        return view('events.events-list')
            ->with('upcomingEvents', $upcomingEvents)
            ->with('pastEvents', $pastEvents);
    }
    public function view(Event $event)
    {
        $invited_people = EventInvitee::where('event_id', $event->id)->get();

        return view('template.admin.pages.event-view')->with('event', $event)->with('invited_people',$invited_people);
    }
      public function landingpage()
    {
      return view ('landing_page.front');
    }

    public function add()
    {
        return view('template.admin.pages.add-event');
    }
    public function upcoming()
    {   
        $today = Carbon::now()->format('Y-m-d');
        $upcomingEvents = Event::where('end_date', '>', $today)
            ->orderBy('start_date', 'desc')
            ->get();
        return view('template.admin.pages.upcoming')->with('upcomingEvents', $upcomingEvents);
    }
    public function save(Request $request)
    {
        $logged_in_user = Auth::user();

        $validator = Validator::make($request->all(), [
           'title' => 'required',
           'description' => 'required',
           'address' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'lat' => 'required',
           'long' => 'required',
        ]);
      //  dd($validator->fails());
        if($validator->fails())
        {
            //echo $validator->errors(); die;
            return redirect()->back()->withErrors($validator)->withInput($request->input());
        }
        Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'lat' => $request->input('lat'),
            'long' => $request->input('long'),
            'user_id' => $logged_in_user->id,
            'slug' => 'events/add'
        ]);

        return redirect()->intended('home');
    }

    public function listEvents(){
       $logged_in_user = Auth::user();
     
       if($logged_in_user->role_id == 2){
        $event_list = Event::where('user_id', $logged_in_user->id)
            ->orderBy('start_date', 'desc')
            ->get();
       }else{
            $event_list = Event::all();
       }
       return view('template.admin.pages.event-list',compact('event_list','logged_in_user'));
       
    }

    public function editEvents(Request $request,$event_id){
       $logged_in_user = Auth::user();
       $event_details = Event::find($event_id);
       $other_users   = User::where('role_id','2')->where('id','!=',$logged_in_user->id)->get();
       return view('template.admin.pages.edit-event')->with('event', $event_details)->with('other_users',$other_users);
    }

    public function updateEvents(Request $request){
        $logged_in_user = Auth::user();
        $event_id = $request->input('event_id');
        $validator = Validator::make($request->all(), [
           'title' => 'required',
           'description' => 'required',
           'address' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'lat' => 'required',
           'long' => 'required',
        ]);
        if($validator->fails())
        {
            //echo $validator->errors(); die;
            return redirect()->back()->withErrors($validator)->withInput($request->input());
        }

        $event_details = Event::find($event_id);

        $event_details->title = $request->input('title');
        $event_details->description = $request->input('description');
        $event_details->address = $request->input('address');
        $event_details->start_date = $request->input('start_date');
        $event_details->end_date = $request->input('end_date');
        $event_details->lat = $request->input('lat');
        $event_details->long = $request->input('long');
        $event_details->user_id = $logged_in_user->id;
        $event_details->slug = 'events/add';
        $event_details->save();

        if($request->input('invited_user') != "" && !empty($request->input('invited_user'))){
           EventInvitee::where('event_id', $event_id)->delete();
        foreach ($request->input('invited_user') as $key => $user_id) {
             $event_invitee =  new  EventInvitee;
             $event_invitee->user_id =  $user_id; 
             $event_invitee->event_id =  $event_id; 
             $event_invitee->is_invited =  1; 
             $event_invitee->is_attending =  0; 
             $user_data = User::select('email')->where('id',$user_id)->first(); 
             $event_invitee->email = $user_data->email; 
             $event_invitee->save();
         }

        }

        return redirect()->intended('home');
    }

    public function myInvitedEvents(){

        $logged_in_user = Auth::user();
        $events = EventInvitee::where('user_id', $logged_in_user->id)->get();
        return view('template.admin.pages.my-events',compact('events'));

    }

    public function acceptInvitation($invitation_id){
        $invitation = EventInvitee::find($invitation_id);
        $invitation->is_attending = 1; 
        $invitation->save();
        $logged_in_user = Auth::user();
        $events = EventInvitee::where('user_id', $logged_in_user->id)->get();
        return view('template.admin.pages.my-events',compact('events'));

    }


     public function declineInvitation($invitation_id){
        $invitation = EventInvitee::find($invitation_id);
        $invitation->is_attending = 2; 
        $invitation->save();
        $logged_in_user = Auth::user();
        $events = EventInvitee::where('user_id', $logged_in_user->id)->get();
        return view('template.admin.pages.my-events',compact('events'));

    }

    //public function Registration(Request $request,$event_id,$user_id){

                
               // Registration::create([
           // 'user_id' => $user_identity->('user_id'),
           // 'event_id' => $event_identity->('event_id'),
          //  'Name' => $request->input('Name'),
            //'Fathers_Name' => $request->input('FathersName'),
           // 'Enrollment Number' => $request->input('Enrollment'),
           // 'course' => $request->input('course'),
           // 'is_Volunteer' => $request->input('Vol'),
           // 'is_Participant' => $request->input('Part'),
           // 'is_attending'=>$request->input('attending'),
           // 'email'=>$request->('email_id'),
           
       // ]);

//        return redirect()->intended('landingpage.front');
    //}


//    }

}
