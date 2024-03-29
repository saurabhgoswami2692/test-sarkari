<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class QuestionController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {   
        return view('questions.index');

        // return view('profile.edit', [
        //     'user' => $request->user(),
        // ]);
    }

    public function add(Request $req){

        return view('questions.add');
    }

}
