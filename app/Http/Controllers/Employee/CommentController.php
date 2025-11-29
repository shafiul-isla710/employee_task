<?php

namespace App\Http\Controllers\Employee;

use App\Models\Comment;
use Illuminate\Http\Request;
use function Pest\Laravel\session;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
   
    /**
     * Store a newly comment in storage.
     */
    public function commentStore(Request $request)
    {
        try{
            $data = $request->validate([
                'comment' => 'required|max:255',
            ]);

            $user_id = Auth::user()->id;
            
            $data['user_id'] = $user_id;
            $data['task_id'] = $request->task_id;

            Comment::create($data);

            return redirect()->back()->with('success', 'Comment added successfully.');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
