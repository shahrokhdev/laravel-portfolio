<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class contactController extends Controller
{
    public function store(Request $request)
    {
      $validation =   Validator::make(request()->all(), [
            'name' => 'required|max:12',
            'email' => "required|email|max:20|min:5",
            'phoneNumber' => 'required|min:11',
            'subject' => 'required|min:3|max:12',
            'message' => 'required|min:3|max:30',
            
        ])->validated();

        if($validation){
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phoneNumber' => $request->phoneNumber,
                'subject' => $request->subject,
                'message' => $request->phoneNumber,
            ]);
            session()->flash('message', __('alert.create_contact_messsage'));
            session()->flash('alert-class', 'alert-success');    
        }
       
        return redirect("/contact");
    }
}
