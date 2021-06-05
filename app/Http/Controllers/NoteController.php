<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use App\Models\Doa;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Doa $doas)
    {
        //
        $userId = Auth::user()->id;
        $doas = Doa::all();
        $notes = Note::where(['user_id' => $userId])->get();
        return view('note/index', compact('notes', 'doas'));
    }

    public function create(Doa $doas)
    {
        $doas = Doa::all();
        return view('note/create', compact('doas'));
    }

    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        Note::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'user_id' => $userId,
            'mood_id' => $request->mood_id,
            'doa_id' => $request->doa_id,
        ]);
        return redirect('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($note_id, Doa $doas)
    {
        //
        // $result = Note::where('note_id', '=', 30);
        $doas = Doa::all();
        $note = Note::where(['note_id' => $note_id])->get();
        return view('note/show', compact('note', 'doas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($note_id, Doa $doas)
    {
        //
        $doas = Doa::all();
        $note = Note::where(['note_id' => $note_id])->get();
        return view('note/edit', compact('note', 'doas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $note_id)
    {
        //
        $userId = Auth::user()->id;
        Note::where('note_id', $note_id)
            ->update(
                [
                    'title' => $request->title,
                    'detail' => $request->detail,
                    'user_id' => $userId,
                    'mood_id' => $request->mood_id,
                    'doa_id' => $request->doa_id,
                ]
            );
        return redirect('notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($note_id)
    {
        //
        $userId = Auth::user()->id;
        Note::where(['user_id' => $userId, 'note_id' => $note_id])->delete();
        return redirect('notes');
    }
}
