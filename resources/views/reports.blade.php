@php
  use App\Models\Lesson;
  use Carbon\Carbon;

  $lessons = Lesson::all()
    ->sortBy([
      ['date', 'asc'],
      ['start_time', 'asc']
    ])
    ->filter(function (Lesson $l) {
      $date = Carbon::createFromFormat('Y-m-d H:i:s', "$l->date $l->end_time");
      return $date->isPast();
    });
@endphp

<x-app-layout>
  <table class="bg-yellow-200 border-collapse border border-slate-500">
    <thead>
    <tr>
      <th class="border border-slate-600">Ingevuld</th>
      <th class="border border-slate-600">Datum</th>
      <th class="border border-slate-600">Tijd</th>
      <th class="border border-slate-600">Leerling</th>
      <th class="border border-slate-600">Acties</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lessons as $lesson)
      <tr>
        <td class="border border-slate-700 text-2xl mdi mdi-{!! empty($lesson->notes) ? 'exclamation-thick' : 'check-bold' !!}"></td>
        <td class="border border-slate-700">{{ $lesson->date }}</td>
        <td class="border border-slate-700">{{ $lesson->start_time }}</td>
        <td class="border border-slate-700">{{ $lesson->student->name }}</td>
        <td class="border border-slate-700 text-2xl">
          <a href="/dashboard/reports/{{ $lesson->id }}" class="mdi mdi-notebook-edit"></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</x-app-layout>
