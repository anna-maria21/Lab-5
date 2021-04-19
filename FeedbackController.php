<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller {

    public function submit(FeedbackRequest $req) {
        $feedback = new Feedback();
        $feedback->name = $req->input('name');
        $feedback->email = $req->input('email');
        $feedback->phone = $req->input('phone');
        $feedback->subject = $req->input('subject');
        $feedback->message = $req->input('message');
        $feedback->save();

        return redirect()->route('home')->with('success', "Ваш запит успішно додано. Чекайте зворотнього зв'язку");
    }

}
