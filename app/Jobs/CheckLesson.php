<?php

namespace App\Jobs;

use App\Models\Lesson;
use App\Models\Stripcard;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CheckLesson implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Lesson $lesson
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // I don't know why, but I'm particularly proud of the functionality here.
        // ✨ It just works. ✨

        // If the lesson we're checking is already taken care of, bail.
        $lesson = $this->lesson;
        if ($lesson->finalized) return;

        // Let's fetch the student's stripcards, order them by creation date (so we're subtracting
        // from the oldest cards first), and then filter the list of obtained cards by checking if
        // they even have any remaining lessons.
        $student = $lesson->student;
        $cards = $student->stripcards
            ->sortBy('created_at')
            ->filter(fn (Stripcard $c) => $c->remaining_lessons > 0);

        // In theory this should never happen. Whichever of my teammates has to take care of
        // scheduling lessons should also check if the student even has any usable stripcards.
        // However, just to be sure, let's do a sanity check.
        if ($cards->isEmpty()) {
            $this->fail(new \Error('No stripcards with remaining lessons left!'));
            dd($cards, $cards->isEmpty());
        }

        // Now, take the first card from our set, subtract a lesson from the ones left, and save it.
        $card = $cards->first();
        --$card->remaining_lessons;
        $card->save();

        // Finally, mark the lesson as finalized and save it.
        $lesson->finalized = true;
        $lesson->save();
    }
}
