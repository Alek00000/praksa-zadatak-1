<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use Newsletter;

class SubscriberController extends Controller
{

    public function index(){
        $subscriber=Subscriber::all();
         return view('subscribers.index', compact('subscriber'));
        }

    public function show($id){
    $subscriber=Subscriber::find($id);
     return view('subscribers.show', compact('subscriber'));
    }



    public function store(Request $request){
            $rules = [
                'first_name'=>'required|max:255',
                'last_name'=>'required|max:255',
                'email'=>'required|max:255',

            ];

              $this->validate($request, $rules);

            $subscribers = new Subscriber;
            $subscribers -> first_name = $request->input('first_name');
            $subscribers -> last_name = $request->input('last_name');
            $subscribers -> email = $request->input('email');
            Newsletter::subscribe(request('email'),[
                'FNAME'=>request('first_name'),
                'FNAME'=>request('last_name'),

            ]);
            $subscribers->save();


             return redirect('/prijava')->with('message', 'Uspjesno!');
    }
}
