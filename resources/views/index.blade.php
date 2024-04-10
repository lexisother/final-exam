<x-app-layout>
  <x-slot name="nav">
    <x-navlink to="/" icon="home">Home</x-navlink>
    <x-navlink to="/contact" icon="phone">Contact</x-navlink>
    <x-navlink to="/login" icon="login">Login</x-navlink>
  </x-slot>

  <div class="flex flex-col">
    <div>
      <img src="/img/header.jpg" />
    </div>
    <div class="mx-16 my-12 flex flex-col gap-2 text-center sm:my-20 md:my-24">
      <p>{{ fake()->text(400) }}</p>
      <p>{{ fake()->text(400) }}</p>
      <p>{{ fake()->text(400) }}</p>
    </div>
    <div class="mx-16">
      <h2 class="my-4 text-2xl">Instructeurs</h2>
      <div class="flex flex-row">
        @foreach ($instructors as $instructor)
          <div>
            <img src="/img/{{ $instructor->info->image }}" />
            <p
              class="relative left-1/2 -translate-x-1/2 -translate-y-full transform bg-gray-500 pl-2">
              {{ $instructor->name }}
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-app-layout>
