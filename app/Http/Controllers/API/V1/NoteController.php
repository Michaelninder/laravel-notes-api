<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(Note::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string'
        ]);

        $note = Note::create($data);
        return response()->json($note, 201);
    }

    public function show(Note $note)
    {
        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string',
            'content' => 'nullable|string'
        ]);

        $note->update($data);
        return response()->json($note);
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json(['message' => 'Note deleted']);
    }
}
