<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;
use App\User; 
use App\Models\Event\Event; 
use DB;
class EventInvitee extends Model
{
    //
    protected $table = 'events_invitee';

    public function invitee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event_details()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
