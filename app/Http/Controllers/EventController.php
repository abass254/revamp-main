<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    //

    public function events(){
        //return User::orderBy('created_at', 'desc')->take(2)->get();
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function addEvent(Request $req){
        //Get user name

        // $firstname = $req->u_fname;
        // $lastname = $req->u_lname;
        // $phone = $req->u_phone;
        
        // $username = strtolower($firstname[0] . $lastname . substr($phone, -4));

        $e_id = $req->e_id;

        if($e_id){
           //'', '', '', '', '', '', '', '', '', '', 'ev_presenter', '', 'ev_photo'
           
           $event = Event::find($e_id);
           $event->ev_title = $req->ev_title;
           $event->ev_code = $req->ev_code;
           $event->ev_type = $req->ev_type;
           $event->ev_start = $req->ev_start;
           $event->ev_end = $req->ev_end;
           $event->ev_date = $req->ev_date;
           $event->ev_venue = $req->ev_venue;
           $event->ev_banner = $req->ev_banner;
           $event->ev_desc = $req->ev_desc;
           $event->ev_status = $req->ev_status;
           $event->ev_presenter = $req->ev_presenter;
           $event->ev_gender = $req->ev_gender;
           $event->ev_photo = $req->ev_photo;
           $event->save();
           return response()->json(
            [
                'code' => 200,
                'message' => 'User data updated successfully'
            ]);

        }

        else{
           // return 'Create';
            
            try{
                $event = new Event();
                $event->ev_title = $req->ev_title;
                $event->ev_code = $req->ev_code;
                $event->ev_type = $req->ev_type;
                $event->ev_start = $req->ev_start;
                $event->ev_end = $req->ev_end;
                $event->ev_date = $req->ev_date;
                $event->ev_venue = $req->ev_venue;
                $event->ev_banner = $req->ev_banner;
                $event->ev_desc = $req->ev_desc;
                $event->ev_status = 1;
                $event->ev_presenter = $req->ev_presenter;
                $event->ev_gender = $req->ev_gender;
                $event->ev_photo = $req->ev_photo;
                $event->save();

                return response()->json(['success' => true, 'message' => 'User saved successfully']);

            }
            catch (\Exception $e) {
                // Return an error response if something goes wrong
                return response()->json(['success' => false, 'message' => 'Failed to save data', 'error' => $e->getMessage()], 500);
            }
        }

        
    }

    public function updateEvent(Request $request)
    {
        $eventId = $request->input('event_txt');
        $status = $request->input('status_txt');

       // return $status;

        // Update event status in the database
        $event = Event::find($eventId);

       // return $event;
        if($status == '1'){
            $new_status = '0';
        }
        else{
            $new_status = '1';
        }
        //return $new_status;
        $event->u_enabled = $new_status;
        $event->save();

        return response()->json(
        [
            'code' => 200,
            'message' => 'Event status updated'
        ]);
    }

    public function getEventById($id){
        return Event::find($id);
    }

    

  
    
    public function generateCode(){
        $event = Event::latest()->first();

        $no = (!$event) ? 1 : $event->id;

        $code = 'EVT-'.str_pad($no, 4, '0', STR_PAD_LEFT);

        return $code;
        
    }
}
