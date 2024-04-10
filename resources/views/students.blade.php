<x-app-layout>
    <table class="bg-yellow-200 border-collapse border border-slate-500">
      <thead>
      <tr>
        <th class="border border-slate-600">Naam</th>
      </tr>
      </thead>
      <tbody>
      @foreach($students as $student)
        <tr>
          <td class="border border-slate-700">{{ $student->name }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
</x-app-layout>
