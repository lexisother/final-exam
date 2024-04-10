<x-app-layout>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          Welkom, {{ Auth::user()->name }}
        </div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
    <table class="bg-yellow-200">
      <thead>
        <tr>
          <th>Datum</th>
          <th>Tijd</th>
          <th>Leerling</th>
          <th>Auto</th>
        </tr>
      </thead>
      <tbody>
        @foreach(\App\Models\Lesson::all() as $lesson)
          <tr>
            <td>{{ $lesson->date }}</td>
            <td>{{ $lesson->start_time }}</td>
            <td>TBD</td>
            <td>{{ $lesson->car->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <table class="bg-yellow-200">
      <thead>
      <tr>
        <th>Leerling</th>
        <th>Resterende lessen</th>
        <th>Strippenkaart niveau</th>
      </tr>
      </thead>
      <tbody>
{{--      @foreach(\App\Models\User::all()->filter(fn (\App\Models\User $user) => $user->role === "Leerling") as $student)--}}
      @foreach(\App\Models\Stripcard::all() as $card)
        @php $student = $card->user()->get()->first(); @endphp
        <tr>
          <td>{{ $student->name }}</td>
          <td>{{ $card->remaining_lessons  }}</td>
          <td>TBD</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>
