<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnswerModel;

class AnswerController extends Controller
{
    public function __construct(){
        $this->answer = new AnswerModel();
    }

    public function ShowAnswer(){
        $data = $this->answer->get();
        return view ('pagesanswer.answer',compact('data'));
    }

    public function ShowCreate(){
        return view ('pagesanswer.create');
    }

    public function CreateAnswer(Request $request){
        $data = $this->answer;
        $data->isi_jawaban = $request->isi_jawaban;
        $data->save();
        return redirect('/answer');
    }

    public function DetilAnswer($id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        return view ('pagesanswer.detil',compact('data'));
    }

    public function ShowEdit($id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        return view ('pagesanswer.edit',compact('data'));
    }

    public function EditAnswer(Request $request,$id){
        $data = $this->answer
        ->where('id',$id)
        ->first();
        $data->isi_jawaban = $request->isi_jawaban;
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
