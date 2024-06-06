<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function contacts(){
        return $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function addContact(Request $req){

        $ct_id = $req->ct_id;

        if($ct_id){

            $contact = Contact::find($ct_id);
            $contact->ct_name = $req->ct_name;
            $contact->ct_email = $req->ct_email;
            $contact->ct_phone = $req->ct_phone;
            $contact->ct_topic = $req->ct_topic;
            $contact->ct_concent = $req->ct_concent;
            $contact->ct_privacy = $req->ct_privacy;
            $contact->ct_role = $req->ct_role;
            $contact->ct_company = $req->ct_company;
            $contact->ev_desc = $req->ct_country;
            $contact->save();
            return response()->json(
                [
                    'code' => 200,
                    'message' => 'Contact data updated successfully'
                ]);

        }

        else{

            try{
                $contact = new Contact();
                $contact->ct_name = $req->ct_name;
                $contact->ct_email = $req->ct_email;
                $contact->ct_phone = $req->ct_phone;
                $contact->ct_topic = $req->ct_topic;
                $contact->ct_concent = $req->ct_concent;
                $contact->ct_privacy = $req->ct_privacy;
                $contact->ct_role = $req->ct_role;
                $contact->ct_company = $req->ct_company;
                $contact->ev_desc = $req->ct_country;
                $contact->save();

                return response()->json(['success' => true, 'message' => 'User saved successfully']);

            }
            catch (\Exception $e) {
                // Return an error response if something goes wrong
                return response()->json(['success' => false, 'message' => 'Failed to save data', 'error' => $e->getMessage()], 500);
            }
        }

    }
}
