<x-app-layout>
<!-- Search Box -->
<form id="labnol" method="get" action="{{ URL::to('/fakearticle') }}" style="margin-left:30%;">
    <div style="margin-top: 10%; width: 60%;">
        <div class="speech">
            <div class="shadow flex">
                <input class="w-full rounded p-2;" type="text" name="search" id="transcript" placeholder="Looking for articles?" value="{{ request('search') }}"/>
                <button style="background-color: black" class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400; w-full rounded p-2" type="submit">
                <i class="fa fa-search" style="color: white"></i>
                {{-- <a href="{{ route('users.index') }}" class="material-icons">Search</a> --}}
                </button>
                <i onclick="startDictation()" class="fa fa-microphone fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</form>

    
            <div class="mt-8 mt-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-semibold text-xl text-gray-400 leading-tight">
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
                            <h2 class="font-semibold text-2xl" style="text-decoration: underline; color: blue">
                                <a href="{{ url('article/'.$article['_id']) }}">{!! $article['highlight']['title'][0] !!}</a>
                            </h2>
                            <p class="m-0">{{ $article['_source']['description']  }}</body>
                            <div>
                                <span class="" style="font-size: 13px;font-weight: 600; color:green">Author: {{$article['_source']['author']}}</span>
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
<script src="https://www.lifesitenews.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>

<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
