<aside
    id="sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0">
    <div class="h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-[#0f0b22]">
        <ul class="space-y-2 font-medium">
            {{ $slot  }}
        </ul>
    </div>
</aside>
