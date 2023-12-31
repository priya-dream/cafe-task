<?php

use Illuminate\Support\Facades\Mail;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Client;
use DB;
use Mail;
use App\Mail\TestMail;

class ClientController extends Controller
{
    public function index(Request $req){
        $filter=$req->input('filter');
        $client = DB::table('clients')->select()->paginate(5);
        //return $client->fname;
        return view('clients-data',compact('client','filter'));
    }

    public function add_form(){
        return view ('clients-add');
    }

    public function create(Request $req){
        $year = $req->input('byear');
        $month = $req->input('bmonth');
        $day = $req->input('bday');
        $dob = $year.'-'.$month.'-'.$day;

        $date = date('Y-m-d');
        // if($dob>$date){
        //     return "Invalid dob";
        // }else{
        //     return "Valid dob";
        // }

        $email = $req->input('email');
        $y = DB::table('clients')->select('id')->where('email',$email)->count();

        if($y>0){
            if($dob>$date){
                return redirect('dashboard/clients/add-new')->with('error','Email already Exist.. And Invalid DOB..');
            }else{
                return redirect('dashboard/clients/add-new')->with('error','Email already Exist..');
            }
        }else{
            if($dob>$date){
            return redirect('dashboard/clients/add-new')->with('error','Invalid DOB');}
            else{
                DB::table('clients')->insert([
                'fname' => $req->input('fname'),
                'lname' => $req->input('lname'),
                'dob' => $dob,
                'contact' => $req->input('contact'),
                'email' => $req->input('email'),
                'image' => $req->input('image'),
                'gender' => $req->input('gender'),
                'street_no' => $req->input('street_no'),
                'street_address' => $req->input('street_address'),
                'city' => $req->input('city'),
                'status' => $req->input('status'),
            ]);
        }
        // $user = "priya02laravel@gmail.com";
        // Mail::to($user)->send(new TestMail($user));
        return redirect('/dashboard/clients')->with('success','New Client Added Successfully');
        }
    }

    public function edit($id){
        $client = Client::find($id);
        //return 'hi';
        return view('clients-edit',compact('client'));
    }

    public function update(Request $req,$id){
        $client = Client::find($id);

        $year = $req->input('byear');
        $month = $req->input('bmonth');
        $day = $req->input('bday');
        $dob = $year.'-'.$month.'-'.$day;

        $client->fname=$req->input('fname');
        $client->lname=$req->input('lname');
        $client->gender=$req->input('gender');
        $client->image=$req->input('image');
        $client->contact=$req->input('contact');
        $client->dob=$dob;
        $client->email=$req->input('email');
        $client->street_no=$req->input('street_no');
        $client->street_address=$req->input('street_address');
        $client->city=$req->input('city');
        $client->status=$req->input('status');

        $client->update();
        return redirect('/dashboard/clients')->with('success','Client details updated successfully');
    }

    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return redirect('/dashboard/clients')->with('success','Client deleted successfully');

    }

    public function show($id){
        $record = Client::find($id);
        return response()->json($record);

    }

    public function search(Request $req){
        $search = $req->input('search');
        $filter = $req->input('filter');
        $result = DB::table('clients')->select('id','image','fname','lname','contact','email','dob','gender','street_no','street_address','city','status')
            ->where('fname', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orWhere('contact', 'LIKE', '%'.$search.'%')
            ->get();

           return view('client-search-data',compact('result','filter'));


    }

}
