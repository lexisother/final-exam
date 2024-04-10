<x-app-layout>
  <x-slot name="nav">
    <x-navlink to="/" icon="home">Home</x-navlink>
    <x-navlink to="/contact" icon="phone">Contact</x-navlink>
  </x-slot>

  <div id="notice" class="absolute left-1/2 p-4 border border-green-500 rounded-xl bg-green-400" hidden>
    <p class="text-center">Bericht verstuurd!</p>
  </div>

  <div class="flex flex-row gap-6 items-center justify-center h-full">
    <img src="/logo.png" class="w-1/5">
    <form class="flex flex-col gap-2">
      <h2 class="text-center">Contact opnemen?</h2>
      <div class="flex flex-col">
        <label for="name">Naam</label>
        <input name="name" type="text" required />
      </div>
      <div class="flex flex-col">
        <label>Email</label>
        <input type="email" required />
      </div>
      <div class="flex flex-col">
        <label>Titel</label>
        <input type="text" required />
      </div>
      <div class="flex flex-col">
        <label>Tekst</label>
        <textarea required></textarea>
      </div>
      <input class="border border-gray-400" type="submit" value="Verstuur bericht" />
    </form>
  </div>
</x-app-layout>
