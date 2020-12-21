<?php

namespace App\Http\Controllers;

 use App\Models\Contact;
use Illuminate\Http\Request;


class generalController extends Controller
{
    public function home() {
        $reviews = new Contact();
    	return view('home', ['reviews' => $reviews->all()] );
    }
    public function full() {
    	return view('full');
    }
    

    public function add_text() {
    	return view('add_text', );
    }
    public function edit_text() {
    	return view('edit_text');
    }
    public function edit_chek(Request $request) {

      $valid=$request->validate([
          'title'=>'required |max:100',
          'sub_title'=>'required|max:100',
          'text'=>'required'

      ]);

       $review = new Contact();
       $review->title =$request->input('title');
       $review->sub_title =$request->input('sub_title');
       $review->text =$request->input('text');

       $review->save();
       return redirect()->route('add_edit');

    }

     public function One_text($id){

      $contact= new Contact;
      return view('full',['reviews'=>$contact->find($id)]);
     }

     public function update($id){

      $contact= new Contact;
      return view('edit_text',['reviews'=>$contact->find($id)]);
     }

     public function update_text($id,Request $request) {

      // $valid=$request->validate([
      //     'title'=>'required |max:100',
      //     'sub_title'=>'required|max:100',
      //     'text'=>'required'

      // ]);

       $review = Contact::find($id);
       $review->title =$request->input('title');
       $review->sub_title =$request->input('sub_title');
       $review->text =$request->input('text');

       $review->save();
       return redirect()->route('show',$id);

    }

    public function delete_text($id){

     Contact::destroy($id);
      return redirect()->route('home');
     }

}


