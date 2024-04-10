<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function edit(Request $request, int $id)
    {
        $lesson = Lesson::find($id);
        $lesson->notes = $request->get('notes');
        $lesson->save();

        return redirect('/dashboard/verslagen');
    }
}
