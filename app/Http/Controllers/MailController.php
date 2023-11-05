<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function send_email($id) {
        $client = DB::table('clients')->select('email')->where('id',$id);
        $to_email = $client->email;
        $data = array('name'=>"ABC Group");
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to($to_email, 'Tutorials Point')->subject
              ('Laravel Testing Mail');
           $message->from('priya02laravel@gmail.com','ABC Group');
        });
        //echo "Email Sent..";
        return redirect('dashboard/clients');
     }
}
