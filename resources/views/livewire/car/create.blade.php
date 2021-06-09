<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent="submit" class="space-y-4 text-gray-700">
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="name">@lang('livewire\car.name')</label>
                                <input wire:model="name"
                                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                    type="text" id="name" />
                                @error('name')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full h-10 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">@lang('livewire\car.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>