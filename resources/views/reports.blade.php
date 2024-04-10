<x-app-layout>
  <table class="border-collapse border border-slate-500 bg-yellow-200">
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
      @foreach ($lessons as $lesson)
        <tr>
          <td
            class="mdi mdi-{!! empty($lesson->notes) ? 'exclamation-thick' : 'check-bold' !!} border border-slate-700 text-2xl"></td>
          <td class="border border-slate-700">{{ $lesson->date }}</td>
          <td class="border border-slate-700">{{ $lesson->start_time }}</td>
          <td class="border border-slate-700">{{ $lesson->student->name }}</td>
          <td class="border border-slate-700 text-2xl">
            <a href="/dashboard/verslagen/{{ $lesson->id }}" class="mdi mdi-notebook-edit"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-app-layout>
