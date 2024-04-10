<x-app-layout>
  <table class="bg-yellow-200 border-collapse border border-slate-500">
    <thead>
    <tr>
      <th class="border border-slate-600">data</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Stripcard::all() as $card)
      <tr>
        <td class="border border-slate-700">{{ $card }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</x-app-layout>
