<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class TopicController extends Controller
{
    public function create() {
        return view('create_topic');
    }
    public function create_topic(Request $req) {
        $topic = new topics();
        $topic->title = $req->title;
        $topic->type = $req->type;
        $topic->user_id = Auth::id();
        $topic->save();
        return redirect()->route('create');
    }
    public function getAllTopics() {
        $topics = topics::all();
        return view('topic', compact('topics'));
    }

    public function search() {
        $topics = topics::all();
        return view('searching', compact('topics'));
    }
    public function findTopics(Request $req) {
        $topics = topics::where('type', $req->type);
        $topics = $topics->get();
        return view('searching', compact('topics'));
    }
    public function topic($id) {
        $topic = topics::find($id);
        $comments = comments::where('topic_id', $id)->get();
        return view('one', compact('topic', 'comments'));
    }
    public function comment(Request $req, $id) {
        $comment = new comments();
        $comment->content = $req->comment;
        $comment->user_id = Auth::id();
        $comment->topic_id = $id;
        if ($req->hasFile('photo')) {
            $path = $req->file('photo')->store('photos', 'public');
            $comment->photo = $path;
        }
        $comment->save();
        return redirect()->route('topic', $id);
    }
}
