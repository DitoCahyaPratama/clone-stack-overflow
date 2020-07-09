<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestModel;

class QuestController extends Controller
{
    public function __construct(){
        $this->quest = new QuestModel();
    }

    public function ShowList(){
        $data = $this->quest->get();
        return view ('pages.listquest',compact('data'));
    }

    public function ShowCreate(){
        return view ('pages.create');
    }

    public function CreateQuest(Request $request){
        $data = $this->quest;
        $data->judul = $request->judul;
        $data->isi_pertanyaan = $request->isi_pertanyaan;
        $data->tag = $request->tag;
        $data->save();
        return redirect('/list');
    }

    public function DetilQuest($id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        return view ('pages.detil',compact('data'));
    }

    public function ShowEdit($id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        return view ('pages.edit',compact('data'));
    }

    public function EditQuest(Request $request,$id){
        $data = $this->quest
        ->where('id',$id)
        ->first();
        $data->judul = $request->judul;
        $data->isi_pertanyaan = $request->isi_pertanyaan;
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
