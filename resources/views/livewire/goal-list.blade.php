<div class="mb-8">
    <h3 class="text-3xl font-bold mb-8">
        Your Goals
    </h3>
    <fieldset class="space-y-5 mb-12">
        @foreach($goals as $goal)
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input id="comments-{{ str_slug($goal->title) }}"
                           name="comments-{{ Str::slug($goal->name) }}"
                           type="checkbox"
                           class="focus:ring-black h-8 w-8 text-black border-gray-300 rounded peer"
                           wire:change="toggleGoal({{ $goal->id }})"
                           @if ($goal->isCheckedToday()) checked @endif>
                    <label for="comments-{{ str_slug($goal->title) }}"
                           class="ml-4 font-medium text-xl peer-checked:line-through text-left">{{ $goal->title }}</label>
                </div>
            </div>
        @endforeach
    </fieldset>
    <label for="email" class="sr-only">New goal</label>
    <input type="text"
           name="newGoal"
           id="newGoal"
           class="focus:ring-black focus:border-black block w-full sm:w-1/2 border-gray-300 rounded-md text-xl font-medium"
           placeholder="A new goal for 2022"
           autocomplete="off"
           wire:keydown.enter="storeGoal"
           wire:model="newGoal">
</div>
