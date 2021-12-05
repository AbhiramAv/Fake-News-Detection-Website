<x-app-layout>
     <!-- Search box-->
     <form action="{{ route('search') }}" style="margin-left:30%; height: 563px;">
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
    
</x-app-layout>