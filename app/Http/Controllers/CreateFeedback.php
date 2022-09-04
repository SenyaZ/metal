<?php

namespace App\Http\Controllers;

use App\Models\feedbacks;
use Illuminate\Http\Request;
use DB;

class CreateFeedback extends Controller
{

    function createFeed(Request $req){

        $data = $req->all();

        $feedback = new feedbacks;
        $feedback->name = $data['nameFeedback'];
        $feedback->surname = $data['surnameFeedback'];
        $feedback->rating = $data['rating_5'];
        $feedback->feedback = $data['feedback'];
        $feedback->objectId = $data['objectId'];
        $feedback->save();

        return redirect()->back();
    }
}
