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
                        <div class="relative inline-block w-full text-gray-700">
                            <label class="block mb-1" for="customer_id">@lang('livewire\rental.customer_name')</label>
                            <select wire:model="customer_id"
                                class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                id="customer_id">
                                <option>@lang('livewire\rental.select_customer')</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
                        </div>
                        <div class="relative inline-block w-full text-gray-700">
                            <label class="block mb-1" for="car_id">@lang('livewire\rental.car_name')</label>
                            <select wire:model="car_id"
                                class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                id="car_id">
                                <option>@lang('livewire\rental.select_car')</option>
                                @foreach($cars as $car)
                                <option value="{{$car->id}}">{{ $car->name }}</option>
                                @endforeach
                            </select>
                            @error('car_id')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
                        </div>
                        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 md:w-1/2">
                                <label class="block mb-1"
                                    for="rent_start_date">@lang('livewire\rental.rent_start_date')</label>
                                <input wire:model="rent_start_date"
                                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                    type="date" id="rent_start_date" required />
                                @error('rent_start_date')<span
                                    class="text-xs text-red-700">{{ $message }}</span>@enderror
                            </div>
                            <div class="w-full px-2 md:w-1/2">
                                <label class="block mb-1"
                                    for="rent_end_date">@lang('livewire\rental.rent_end_date')</label>
                                <input wire:model="rent_end_date"
                                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline"
                                    type="date" id="rent_end_date" />
                                @error('rent_end_date')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full h-10 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">@lang('livewire\rental.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>