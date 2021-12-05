<x-app-layout>

<!-- Search box-->
<form action="{{ route('search') }}" style="margin-left:30%">
                <div style="margin-top: 4%; width: 60%;">
                    <div class="shadow flex">
                        <input class="w-full rounded p-2" name="search" type="text" placeholder="Looking for articles?" value="{{ request('search') }}">
                        <button style="background-color: white" class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400" type="submit">
                            <i class="material-icons">search</i>
                            {{-- <a href="{{ route('users.index') }}" class="material-icons">Search</a> --}}
                        </button>
                    </div>
                </div>
            </form>
    
            <div class="mt-8 mt-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Results : ') }} <span class="text-gray-400">({{ $count }})</span>
            </h2>
        </div>
    </div>
    <div class="mt-8 mt-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="height: 620px;overflow-y: auto;">
                @forelse ($response as $article)
                    <div class="bg-blue border-b border-gray-200 space-y-8">
                        <article class="space-y-1" style="padding:20px !important;  border-bottom: 1px solid blackk;">
                            <h2 class="font-semibold text-2xl" style="text-decoration: underline"><a href="{{ url('article/'.$article['_id']) }}">{{ $article['_source']['title']  }}</a></h2>
                            <p class="m-0">{{ $article['_source']['description']  }}</body>
                            <div>
                                <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-yellow-500" style="font-size: 13px;font-weight: 600;">Author: {{$article['_source']['author']}}</span>
                            </div>
                        </article>
                        @empty
                            <p style="margin: 21%;margin-left: 44%;">No articles found</p>
                        @endforelse  
                    </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
