<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // /tasks
      
        $notes = Note::latest()->get();
        return view('lecturer.list_notes', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // /tasks/create
        return view('lecturer.create_notes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate(request(), [
          'title' => 'required|min:3',
          'body' => 'required'
        ]);
        // POST /tasks
      
        // view form data dlm json
        // dd(request()->all());
      
        // create a new posts using request data
      
//        $note = new Note;
//      
//        $note->title = request('title');
//        $note->body = request('body');
      
//        // save it to database
//        $note->save();
      
        Note::create([
          'title' => request('title'),
          'body' => request('body')
        ]);
        // and then redirect to the home page
        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function show(Note $note){
      
      return view('lecturer.show_notes', compact('note'));
    }

//    public function show($id)
//    {
//        // GET /tasks/id
//        $note = Note::find($id);
//        return view('lecturer.show_notes', compact('note'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET /tasks/id/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // PATCH /tasks/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE /tasks/id
    }
}
