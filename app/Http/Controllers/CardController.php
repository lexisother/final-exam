<?php

namespace App\Http\Controllers;

use App\Models\Stripcard;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create(Request $request)
    {
        $user = User::find($request->get('student'));
        $lessons = match($request->get('card')) {
            'A' => 5,
            'B' => 10,
            'C' => 20
        };

        $user->stripcards()->create([
            'remaining_lessons' => $lessons
        ]);

        return redirect('/dashboard/strippenkaarten');
    }

    public function delete(Request $request, int $id)
    {
        Stripcard::findOrFail($id)->delete();
        return redirect('/dashboard/strippenkaarten');
    }
}
