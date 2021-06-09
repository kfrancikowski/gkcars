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
                    <h3>@lang('livewire\customer.name_rentals', ['name' => $model->name])</h3>
                    <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-blue-50">
                        @forelse($model->rentals as $rental)
                        @if($loop->odd)
                        <div class="flex flex-row-reverse md:contents">
                            <div class="bg-blue-500 col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">
                                    {{ $rental->rent_start_date }} -
                                    @if($rental->rent_end_date)
                                    {{$rental->rent_end_date}}
                                    @else
                                    @lang('livewire\customer.not_returned')
                                    @endif
                                </h3>
                                <p class="leading-tight text-justify">
                                    {{$rental->car->name}}
                                </p>
                            </div>
                            <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                            </div>
                        </div>
                        @endif
                        @if($loop->even)
                        <div class="flex md:contents">
                            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                            </div>
                            <div class="bg-blue-500 col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">
                                    {{ $rental->rent_start_date }} -
                                    @if($rental->rent_end_date)
                                    {{$rental->rent_end_date}}
                                    @else
                                    @lang('livewire\customer.not_returned')
                                    @endif
                                </h3>
                                <p class="leading-tight text-justify">
                                    {{$rental->car->name}}
                                </p>
                            </div>
                        </div>
                        @endif
                        @empty
                        <div class="flex col-start-1 col-end-12 text-center justify-center">
                            <span class="text-red-500">@lang('livewire\customer.no_history')</span>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>