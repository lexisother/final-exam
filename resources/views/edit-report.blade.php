<x-app-layout>
  <form class="flex flex-col gap-4" action="/api/lessons/edit/{{ $id }}" method="post">
    @csrf
    <textarea name="notes" class="lg:h-full" cols="40" rows="10">{{ $lesson->notes }}</textarea>
    <input class="border border-gray-400" type="submit" value="Opslaan" />
  </form>
</x-app-layout>
