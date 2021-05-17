<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudyRequest;

class RequestController extends Controller
{
    public function requests(Request $request)
    {
        return view('/bible-study-request');
    }

    public function requestsForm(Request $request)
    {
        $bible_study_request = new BibleStudyRequest();
        return view('/bible-study-request-form', compact('bible_study_request'));
    }
    
    public function userInfo(Request $request)
    {
        $request->validate ([
            'name' => 'required',
            'email' => 'required|email|unique:bible_study_request',
            'phone_number' => 'required|digits:11|unique:bible_study_request',
            'birthdate' => 'required',
            'religious_affi' => 'required',
            'Bstudy_date' => 'required',
            'Bstudy_time' => 'required',
            'location_address' => 'required',

        ]);

            $bible_study_request = new BibleStudyRequest();
            $bible_study_request->name = $request->name;
            $bible_study_request->email = $request->email;
            $bible_study_request->phone_number = $request->phone_number;
            $bible_study_request->birthdate = $request->birthdate;
            $bible_study_request->religious_affi = $request->religious_affi;
            $bible_study_request->Bstudy_date = $request->Bstudy_date;
            $bible_study_request->Bstudy_time = $request->Bstudy_time;
            $bible_study_request->location_address = $request->location_address;
            
            if ($bible_study_request->save()) {
                $request->session()->put('LoggedUser', $bible_study_request->id);
                return redirect('/thank-you');

            }

            return redirect('/bible-study-request-form');


    }

    public function thankYou(Request $request)
    {
        $data = ['LoggedUserInfo'=>BibleStudyRequest::where('id','=', session('LoggedUser'))->first()];
        return view('/thank-you');
    }

}

