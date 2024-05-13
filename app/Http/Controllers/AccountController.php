<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Auth;

class AccountController extends Controller
{
    //

    public function users(){
       
        $users = User::all();
        $_token = csrf_token();
        return view('user.index', compact('users', '_token'));
    }

    public function addUser(Request $req){
        //Get user name

        $firstname = $req->u_fname;
        $lastname = $req->u_lname;
        $phone = $req->u_phone;
        
        $username = strtolower($firstname[0] . $lastname . substr($phone, -4));

        $u_id = $req->u_id;

        if($u_id){
            
           
           $us = User::find($u_id);
           $us->u_fname = $req->u_fname;
           $us->u_lname = $req->u_lname;
           $us->gender = $req->gender;
           $us->u_phone = $req->u_phone;
           $us->email = $req->u_email;
           $us->save();
           return response()->json(
            [
                'code' => 200,
                'message' => 'User data updated successfully'
            ]);

        }

        else{
           // return 'Create';
            
            try{
                $user = new User();
                $user->u_fname = $req->u_fname;
                $user->u_lname = $req->u_lname;
                $user->u_name = $username;
                $user->email = $req->u_email;
                $user->password = Hash::make($req->u_phone);
                $user->u_enabled = '1';
                $user->change_password = '1';
                $user->u_phone = $req->u_phone;
                $user->gender = $req->gender;
                $user->role = '2';
                $user->save();

                return response()->json(['success' => true, 'message' => 'User saved successfully']);

            }
            catch (\Exception $e) {
                // Return an error response if something goes wrong
                return response()->json(['success' => false, 'message' => 'Failed to save data', 'error' => $e->getMessage()], 500);
            }
        }

        
    }

    public function updateStatus(Request $request)
    {
        $userId = $request->input('user_txt');
        $status = $request->input('status_txt');

       // return $status;

        // Update user status in the database
        $user = User::find($userId);

       // return $user;
        if($status == '1'){
            $new_status = '0';
        }
        else{
            $new_status = '1';
        }
        //return $new_status;
        $user->u_enabled = $new_status;
        $user->save();

        return response()->json(
        [
            'code' => 200,
            'message' => 'User status updated'
        ]);
    }

    public function getUserById($id){
        return User::find($id);
    }

    public function updatePassword(Request $request){
        $pass_change = $req->password_change;
        
        $user = User::find($request->u_id);

        $user->password = Hash::make($request->n_pass);
        $user->change_password = $pass_change == 1 ? 0 : 1;
        $user->save();

        return response()->json([
            'code' => '200',
            '_token' => csrf_token(),
            'message' => 'Password successfully updated'
        ]);
    }

    public function customLogin(Request $request){
        
        $credentials = $request->only('email', 'password'); 
        
        $user = User::where('email', $credentials['email'])->first();
        //return $user->u_enabled;
        if($user){
            if($user->u_enabled != '1'){
                return response()->json([
                    'code' => '520',
                    'message' => 'You are not allowed to view this part. Please contact the administrator'
                ]);
            }
            if ($user->u_enabled == 1 && Auth::attempt($credentials)) {
                if ($user->change_password == 1) {
                    return response()->json([
                        'code' => '600',
                        'u_id' => $user->id,
                        'message' => 'You need to change your password'
                    ]);
                } else {
                    // Redirect to home page
                    return response()->json([
                        'code' => '200',
                        'message' => 'Welcome back '.$user->u_name
                    ]);
                }
            }
            else{
                return response()->json([
                    'code' => '400',
                    'message' => 'Invalid credentials'
                ]);
            }
        }

        else{
            return response()->json([
                'code' => '400',
                'message' => 'User Not Found'
            ]);
        }
    }

    public function clearSession(Request $request)
    {
        $request->session()->invalidate();
        return response()->json(['success' => true]);
    }

    public function generateCode(){
        $user = Post::latest()->first();

        $no = (!$user) ? 1 : $user->id;

        $code = 'USR-'.str_pad($no, 4, '0', STR_PAD_LEFT);

        return $code;
        
    }
}
