<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $instructors = User::all()->filter(fn (User $u) => $u->role === 'Instructeur');

        return view('index', [
            'instructors' => $instructors,
        ]);
    }
}
