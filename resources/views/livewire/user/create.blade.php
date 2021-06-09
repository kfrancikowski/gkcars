<div>
    <form wire:submit.prevent="submit" class="space-y-4 text-gray-700">

        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
            <div class="w-full px-2 md:w-1/2">
                <label class="block mb-1" for="firstname">@lang('livewire\user.firstname')</label>
                <input wire:model="firstname"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                    type="text" id="firstname" />
                @error('firstname')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
            </div>
            <div class="w-full px-2 md:w-1/2">
                <label class="block mb-1" for="lastname">@lang('livewire\user.lastname')</label>
                <input wire:model="lastname"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                    type="text" id="lastname" />
                @error('lastname')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block mb-1" for="email">@lang('livewire\user.email')</label>
                <input wire:model="email"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                    type="text" id="email" />
                @error('email')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="flex flex-wrap">
            <button type="submit"
                class="w-full h-10 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">@lang('livewire\user.save')</button>
        </div>
    </form>
</div>