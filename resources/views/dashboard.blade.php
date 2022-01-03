<x-app-layout>
    <section
        class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
        <div class="md:flex-1 md:mr-10">
            @livewire('goal-list')
        </div>
        <div class="justify-around md:block mt-8 md:mt-0 flex-1">
            @livewire('streak-list')
        </div>
    </section>
</x-app-layout>
