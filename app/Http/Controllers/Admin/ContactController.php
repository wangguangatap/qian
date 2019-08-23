<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
          $model= new Contact();
            $model->name=$request->name;
            $model->email=$request->email;
            $model->interested=$request->interested;
            $model->title=$request->title;
            $model->message=$request->message;
            $model->save();
        }
        return back();
    }

    public function list(){
        $contact=Contact::OrderBy('id','asc')->paginate(20);
        return view('admin.contact.index')->with('contact',$contact);
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return back();
    }
}
