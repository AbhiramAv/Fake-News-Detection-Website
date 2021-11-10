<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Under Development ---
        </h2>
    </x-slot> --}}

    <div class="flex" style="margin: 10px;height: 735px;border: 1px solid grey; overfolow-y:auto">
        <div class="flex-1 ..." style="border-right: 1px solid black;margin-right: 5px; max-height: 734px; overflow-y:auto ">
           @if($id)
           @include('opages.fakenews'.$id)
           @endif
        </div>
        <div class="flex-1 ..." style="max-height: 734px; margin-left:2px; overflow-y:auto">
            <x-guest-layout>
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                {{-- Dashboard --}}
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="width:11em">
                                    <x-jet-nav-link href="{{ url('article/'.$id.'/dashboard') }}" active="{{ str_contains(url()->full(), '/dashboard') ? 'active': '' }}">
                                        Relevant Papers
                                    </x-jet-nav-link>
                                </div>
                                {{-- Snopes.com --}}
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="width:10.5em">
                                    <x-jet-nav-link href="{{ url('article/'.$id.'/snopes') }}" active="{{ str_contains(url()->full(), '/snopes') ? 'active': '' }}">
                                        Snopes.com
                                    </x-jet-nav-link>
                                </div>
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex {{ str_contains(url()->full(), '/survey') ? 'active': '' }}" style="width:10.5em">
                                    <x-jet-nav-link href="{{ url('article/'.$id.'/survey') }}" active="{{ str_contains(url()->full(), '/survey') ? 'active': '' }}">
                                        Survey
                                    </x-jet-nav-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div>
                    @if(str_contains(url()->full(), '/dashboard'))
                        @foreach ($source as $key=>$item)
                            @if ($item['title'] === "")
                                <p style="color: red">No relevant papers</p>
                            @else
                                <div class="w-full my-4">
                                    <div x-data={show:true} class="rounded-sm">
                                        <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
                                            <p style="color: black">Relevant Paper{{ $key }}:
                                                <button @click="show=!show" class="underline text-red-500 hover:text-red-700 focus:outline-none" type="button" style="color: green">
                                                    Collapse
                                                </button>
                                            </p>
                                        </div>
                                        <div x-show="show" class="border border-b-0 px-10 py-6">
                                            <span style="color: blue">Title:</span> <a href="{{ $item['url'] }}" target="_blank" title="click to open link" style="color: red;text-decoration: underline">{{ $item['title'] }}</a> <br>
                                            <span style="color: blue">Authors:</span> {{ $item['authors'] }} <br>
                                            <span style="color: blue">Journal:</span> {{ $item['journal'] }} <br>
                                            <span style="color: blue">Year:</span> {{ $item['year'] }}<br>
                                            <span style="color: blue">Claim:</span> {{ $item['claim'] }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @elseif(str_contains(url()->full(), '/snopes'))
                        @include('snopesarticles.snopes'.$id)
                    @elseif(str_contains(url()->full(), '/survey'))
                        
                    @endif
                </div>
            </x-guest-layout>
        </div>
    </div>
</x-app-layout>
