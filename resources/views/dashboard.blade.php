@php
  use App\Models\{Lesson, Stripcard};

  $lessons = Lesson::all()->sortBy([
    ['date', 'asc'],
    ['start_time', 'asc']
  ]);
@endphp

<x-app-layout>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
        <div class="p-6 text-gray-900 dark:text-gray-100">Welkom, {{ Auth::user()->name }}</div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
    <table class="bg-yellow-200 border-collapse border border-slate-500">
      <thead>
        <tr>
          <th class="border border-slate-600">Datum</th>
          <th class="border border-slate-600">Tijd</th>
          <th class="border border-slate-600">Leerling</th>
          <th class="border border-slate-600">Auto</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lessons as $lesson)
          <tr>
            <td class="border border-slate-700">{{ $lesson->date }}</td>
            <td class="border border-slate-700">{{ $lesson->start_time }}</td>
            <td class="border border-slate-700">{{ $lesson->student->name }}</td>
            <td class="border border-slate-700">{{ $lesson->car->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <table class="bg-yellow-200 border-collapse border border-slate-500">
      <thead>
        <tr>
          <th class="border border-slate-600">Leerling</th>
          <th class="border border-slate-600">Resterende lessen</th>
          <th class="border border-slate-600">Strippenkaart niveau</th>
        </tr>
      </thead>
      <tbody>
        @foreach (Stripcard::all() as $card)
          <tr>
            <td class="border border-slate-700">{{ $card->user->name }}</td>
            <td class="border border-slate-700">{{ $card->remaining_lessons }}</td>
            <td class="border border-slate-700">{{ $card->level }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>
