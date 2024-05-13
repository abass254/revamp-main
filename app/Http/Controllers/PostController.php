<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Auth;


class PostController extends Controller
{
    //

    public function jobs(){
        $posts = Post::all();
        $_token = csrf_token();
        return view('job.index', compact('posts', '_token'));
    }

    public function addJob(Request $req){
        $jb_id = $req->jb_id;

        if($jb_id){            
            $jb = Post::find($jb_id);

            $jb->jb_title = $req->jb_title;
            $jb->jb_description = $req->jb_description;
            $jb->jb_requirements = $req->jb_requirements;
            $jb->save();
            return response()->json(
            [
                'code' => 200,
                'message' => 'User data updated successfully'
            ]);

        }

        else{
            
            try{
                $jb = new Post();
                $jb->jb_title = $req->jb_title;
                $jb->jb_description = $req->jb_description;
                $jb->jb_requirements = $req->jb_requirements;
                $jb->jb_date_posted = Carbon::now();
                $jb->jb_posted_by = Auth::user()->id;
                $jb->jb_status = '1';
                $jb->save();

                return response()->json(['success' => true, 'message' => 'User saved successfully']);

            }
            catch (\Exception $e) {
                // Return an error response if something goes wrong
                return response()->json(['success' => false, 'message' => 'Failed to save data', 'error' => $e->getMessage()], 500);
            }
        }

        
    }

    public function getJobById($id){

        
        $posts = Post::find($id);
        // // Split the paragraph into sentences
        // $sentences = preg_split('/(?<=[.?!])\s+(?=[a-zA-Z])/', $posts->jb_description);
        // // Remove white spaces used to space paragraphs
        // $cleaned_paragraph = implode("\n", array_map('trim', $sentences));
        // // Output the cleaned paragraph


        // foreach(preg_split('/(?<=[.?!])\s+(?=[a-zA-Z])/', $posts->jb_description) as $sentence){
        //     $sent[] = trim($sentence);
        // }

        
        // return $sent;

        $_token = csrf_token();




        return view('job.view', compact('posts', '_token'));


        
    }

    public function updateJobDetails($id){

       



        $post = Post::find($id);
        $post->jb_description = $req->jb_description;
        $post->jb_requirements = $req->jb_requirements;
        $post->save();

        return response()->json(
        [
            'code' => 200,
            'message' => 'Job details successfully updated'
        ]);
    }


    public function updateStatus(Request $request)
    {
        $userId = $request->input('user_txt');
        $status = $request->input('status_txt');

       // return $status;

        // Update user status in the database
        $post = Post::find($userId);

       // return $user;
        if($status == '1'){
            $new_status = '0';
        }
        else{
            $new_status = '1';
        }
        //return $new_status;
        $post->jb_status = $new_status;
        $post->save();

        return response()->json(
        [
            'code' => 200,
            'message' => 'Job status updated'
        ]);
    }



}
