<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

$lessons = \App\Models\Lesson::all()
    ->sortBy([
        ['date', 'asc'],
        ['start_time', 'asc']
    ])
    ->filter(function (\App\Models\Lesson $l) {
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', "$l->date $l->end_time");
        return $date->isPast();
    });
$lessons->each(function ($lesson) {
    \Illuminate\Support\Facades\Schedule::job(new \App\Jobs\CheckLesson($lesson))->everyMinute();
});
