<x-app-layout>

<!-- Search Box -->
<form id="labnol" method="get" action="{{ URL::to('/fakearticle') }}" style="margin-left:30%; height: 348px;">
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

     
    
</x-app-layout>
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