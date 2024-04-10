<?php

use App\Jobs\CheckLesson;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

$lessons = Lesson::all()
    ->sortBy([
        ['date', 'asc'],
        ['start_time', 'asc'],
    ])
    ->filter(function (Lesson $l) {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', "$l->date $l->end_time");

        return $date->isPast();
    });
$lessons->each(function ($lesson) {
    Schedule::job(new CheckLesson($lesson))->everyMinute();
});
