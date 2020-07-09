<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnswerModel;
use Auth;

class AnswerController extends Controller
{
    public function __construct(){
        $auth = $this->middleware('auth')->except(['ShowAnswer']);
        if($auth){
            $this->answer = new AnswerModel();
        }
    }

    public function ShowAnswer(){
        $data = $this->answer->get();
        return view ('pages.answers.index',compact('data'));
    }

    public function ShowCreate(){
        return view ('pages.answers.create');
    }

    public function CreateAnswer(Request $request){
        $data = $this->answer;
        $data->user_id = Auth::user()->id;
        $data->isi = $request->isi;
        $data->save();
        return redirect('/answer');
    }

    public function DetilAnswer($id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        return view ('pages.answers.detail',compact('data'));
    }

    public function ShowEdit($id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        return view ('pages.answers.edit',compact('data'));
    }

    public function EditAnswer(Request $request,$id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        $data->isi = $request->isi;
        $data->save();
        return redirect ('/answer');
    }

    public function DeleteAnswer($id){
        $data = $this->answer
        ->where('id',$id);

        $data->delete();
        return redirect ('/answer');
    }
}
