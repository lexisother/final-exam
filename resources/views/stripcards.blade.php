<x-app-layout>
  <div id="create" class="mb-4 w-min rounded-md bg-green-400 p-4">
    <div class="mdi mdi-plus"></div>
  </div>
  <form id="form" action="/api/cards/create" method="post" hidden>
    @csrf
    <select name="student">
      @foreach ($students as $student)
        <option name="user" value="{{ $student->id }}">{{ $student->name }}</option>
      @endforeach
    </select>
    <select name="card">
      <option name="a">A</option>
      <option name="b">B</option>
      <option name="c">C</option>
    </select>
    <input class="border border-gray-400 p-2" type="submit" value="Aanmaken" />
  </form>

  <table class="border-collapse border border-slate-500 bg-yellow-200">
    <thead>
      <tr>
        <th class="border border-slate-600">Leerling</th>
        <th class="border border-slate-600">Resterende lessen</th>
        <th class="border border-slate-600">Acties</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cards as $card)
        <tr>
          <td class="border border-slate-700">{{ $card->user->name }}</td>
          <td class="border border-slate-700">{{ $card->remaining_lessons }}</td>
          <td class="border border-slate-700 text-2xl">
            <a href="/api/cards/delete/{{ $card->id }}" class="mdi mdi-trash-can"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-app-layout>
