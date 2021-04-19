<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Dogs;

class DogsController extends Controller {

    public function show_info() {
        return view('info', ['data' => Dogs::all()]);
    }

    public function delete($id) {
        Dogs::find($id)->delete();
        return redirect()->route('info') -> with('success', 'Ви забрали цуценя!');
    }
}
