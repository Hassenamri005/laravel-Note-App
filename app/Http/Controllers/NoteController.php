<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
class NoteController extends Controller
{
    function index(){
        return view('home');
    }
    function list(){
        $data = Note::all();
        return view('list', ["data"=>$data]);
    }
    function add(Request $req){
        //return $req->input();
        $note = new Note;
        $note->title=$req->input('title');
        $note->description=$req->input('description');
        $note->begin_at=$req->input('begin_at');
        $note->end_at=$req->input('end_at');
        $note->save();
        $req->session()->flash('status','Note added successfully');
        return redirect('list');
    }
    function delete($id, Request $req){
        Note::find($id)->delete();
        //Session::flash('status', 'Restaurand has been deleted successfully');
        $req->session()->flash('status', 'Note has been deleted successfully');
        return redirect('list');
    }
    function edit($id, Request $req){
        $data = Note::find($id);
        $note = new Note;
        $note->title=$req->input('title');
        $note->description=$req->input('description');
        $note->begin_at=$req->input('begin_at');
        $note->end_at=$req->input('end_at');
        $note->update();
        $req->session()->flash('status', 'Note has been edited successfully');
        return view('edit', ["data"=>$data]);
    }
}
