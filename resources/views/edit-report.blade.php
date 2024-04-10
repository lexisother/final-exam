@php
    use App\Models\Lesson;

    $lesson = Lesson::find($id);
@endphp

<x-app-layout>
  <form action="/api/lessons/edit/{{ $id }}" method="post">
    @csrf
    <textarea name="notes" cols="40" rows="10">{{ $lesson->notes }}</textarea>
    <input type="submit" value="Opslaan">
  </form>
</x-app-layout>
