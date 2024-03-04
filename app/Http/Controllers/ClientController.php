<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function add(){
        return view('client');
    }
    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'telephone' => 'required|min:12|max:12',
            'address'=> 'required',
            'company_logo'=> 'required'
        ]);
        $client = new Client();
        $client->name= $request->input('name');
        $client->email= $request ->input('email');
        $client->telephone= $request ->input('Telephone');
        $client->address= $request ->input('Address');
        $client->company_logo= $request ->input('company_logo');
        $client->save();
      return redirect('/dashboard');
    }
}
