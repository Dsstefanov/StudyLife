<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class MailingController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function newMemberNotification(Request $request){
        $data = $request->input();
        Mail::send('emails.new_member', ['user' => $data], function ($m) use ($data) {
            $m->from('dsstefanov2@gmail.com', 'Dimitar Stefanov');

            $m->to('dimitar_s_tg@abv.bg', $data['first_name'])->subject('StudyLife');
        });
        return response()->redirectTo('/');
    }
}