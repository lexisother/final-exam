<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Stripcard;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $lessons = Lesson::all()->sortBy([
            ['date', 'asc'],
            ['start_time', 'asc'],
        ]);
        $cards = Stripcard::all();

        return view('dashboard', [
            'lessons' => $lessons,
            'cards' => $cards,
        ]);
    }

    public function stripcards(): View
    {
        $students = User::all()->filter(fn (User $u) => $u->role === 'Leerling');
        $cards = Stripcard::all();

        return view('stripcards', [
            'students' => $students,
            'cards' => $cards,
        ]);
    }

    public function reports(): View
    {
        $lessons = Lesson::all()
            ->sortBy([
                ['date', 'asc'],
                ['start_time', 'asc'],
            ])
            ->filter(function (Lesson $l) {
                $date = Carbon::createFromFormat('Y-m-d H:i:s', "$l->date $l->end_time");

                return $date->isPast();
            });

        return view('reports', [
            'lessons' => $lessons,
        ]);
    }

    public function editReport(int $id): View
    {
        $lesson = Lesson::find($id);

        return view('edit-report', [
            'id' => $id,
            'lesson' => $lesson,
        ]);
    }

    public function students(): View
    {
        $students = User::all()->filter(fn (User $u) => $u->role === 'Leerling');

        return view('students', [
            'students' => $students,
        ]);
    }
}
