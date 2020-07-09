<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestModel;
use Auth;

class QuestController extends Controller
{
    public function __construct(){
        $auth = $this->middleware('auth')->except(['ShowList']);
        if($auth){
            $this->quest = new QuestModel();
        }
    }

    public function ShowList(){
        $data = $this->quest->get();
        return view ('pages.questions.index',compact('data'));
    }

    public function ShowCreate(){
        return view ('pages.questions.create');
    }

    public function CreateQuest(Request $request){
        $data = $this->quest;
        $data->user_id = Auth::user()->id;
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->tag = $request->tag;
        $data->save();
        return redirect('/list');
    }

    public function DetailQuest($id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        return view ('pages.questions.detail',compact('data'));
    }

    public function ShowEdit($id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        return view ('pages.questions.edit',compact('data'));
    }

    public function EditQuest(Request $request,$id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->tag = $request->tag;
        $data->save();
        return redirect ('/list');
    }

    public function DeleteQuest($id){
        $data = $this->quest
        ->where('id',$id);

        $data->delete();
        return redirect ('/list');
    }
}
