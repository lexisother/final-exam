@php use App\Models\User; @endphp
<x-app-layout>
  <x-slot name="nav">
    <x-navlink to="/" icon="home">Home</x-navlink>
    <x-navlink to="/contact" icon="phone">Contact</x-navlink>
  </x-slot>

  <div class="flex flex-col">
    <div>
      <img src="/img/header.jpg" />
    </div>
    <div class="flex flex-col gap-2 my-12 mx-16 text-center sm:my-20 md:my-24">
      <p>{{ fake()->text(400) }}</p>
      <p>{{ fake()->text(400) }}</p>
      <p>{{ fake()->text(400) }}</p>
    </div>
    <div>
      <h2 class="text-2xl my-4">Instructeurs</h2>
      <div class="flex flex-row">
        @foreach(User::all()->filter(fn (User $u) => $u->role === "Instructeur") as $instructor)
          <div>
            <img src="/img/{{ $instructor->info->image }}" />
            <p class="relative left-1/2 transform -translate-x-1/2 -translate-y-full bg-gray-500">{{ $instructor->name }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-app-layout>
