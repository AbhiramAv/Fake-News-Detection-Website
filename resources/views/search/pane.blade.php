<x-app-layout>

<!-- Search Box -->
<form id="labnol" method="get" action="{{ URL::to('/fakearticle') }}" style="margin-left:30%;">
    <div style="margin-top: 10%; width: 60%;">
        <div class="speech">
            <div class="shadow flex">
                <input class="w-full rounded p-2;" type="text" name="search" id="transcript" placeholder="Looking for articles?" value="{{ request('search') }}" />
                <button style="background-color: black" class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400; w-full rounded p-2" type="submit">
                <i class="fa fa-search" style="color: white"></i>
                {{-- <a href="{{ route('users.index') }}" class="material-icons">Search</a> --}}
                </button>
                <i onclick="startDictation()" class="fa fa-microphone fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</form>

<div class="flex" style="margin: 75px;height: 735px;border: 1px solid black;">
        <div class="flex-1 ..." style="border-right: 1px solid black;margin-right: 0px; max-height: 734px; overflow-y:auto ">
           @include('articles.fakearticles.fakenews'.$id)
        </div>
        <div class="flex-1 ..." style="max-height: 734px; margin-left:2px; overflow-y:auto">
            <x-guest-layout>
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                {{-- Dashboard --}}
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="width:11em;" >
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
                        @include('articles.snopesarticles.snopes'.$id)
                    @elseif(str_contains(url()->full(), '/survey'))
                    <form method="GET" action="SurveyCreate">
        <div>
            <p>1. Was the article true or false based on SciPEP’s recommendation?</p>

                <input type="radio" id="true_1" name="question_1" value="True" required>
                <label for="true_1">True</label><br>
                <input type="radio" id="false_1" name="question_1" value="False">
                <label for="false_1">False</label><br>
                <input type="radio" id="nothing_1" name="question_1" value="I dont know">
                <label for="nothing_1">I don't know</label>
        </div>

        <br>

        <div>
            <p>2. Did you have any prior beliefs/opinions about this topic? </p>

                <input type="radio" id="yes_2" name="question_2" value="yes" required>
                <label for="yes_2">Yes</label><br>
                <input type="radio" id="No_2" name="question_2" value="No">
                <label for="No_2">No</label><br> 
        </div>

        <br>

        <div>
            <p>3. Did your prior beliefs/opinions on this topic align with our recommendation? </p>

                <input type="radio" id="yes_3" name="question_3" value="yes" required>
                <label for="yes_3">Yes</label><br>
                <input type="radio" id="No_3" name="question_3" value="No">
                <label for="No_3">No</label><br>
                <input type="radio" id="NA_3" name="question_3" value="NA">
                <label for="NA_3">Not Applicable</label><br>
        </div>

        <br>

        <div>
            <p>4. If you held prior beliefs/opinions that did not align with the system’s
            recommendation, did the system change your beliefs/opinions on this topic?
            </p>

             
                <input type="radio" id="yes_4" name="question_4" value="yes" required>
                <label for="yes_4">Yes</label><br>
                <input type="radio" id="Somewhat_4" name="question_4" value="somewhat">
                <label for="Somewhat_4">Somewhat</label><br>
                <input type="radio" id="No_4" name="question_4" value="No">
                <label for="No_4">No</label><br>
                <input type="radio" id="NA_4" name="question_4" value="NA">
                <label for="No_4">Not Applicable</label><br>
        </div>

        <br>

        <div>
            <p>5. What is your willingness to adopt the system for checking article credibility?
            </p>

             
                <input type="radio" id="yes_4" name="question_5" value="Definitely" required>
                <label for="yes_4">Definitely</label><br>
                <input type="radio" id="Somewhat_4" name="question_5" value="Probably">
                <label for="Somewhat_4">Probably</label><br>
                <input type="radio" id="No_4" name="question_5" value="Probably Not">
                <label for="No_4">Probably Not</label><br>
                <input type="radio" id="NA_4" name="question_5" value="Definitely Not">
                <label for="No_4">Definitely Not</label><br>
        </div>

            <input class="submit-button" type="submit" value="Submit">
    </form>
        @endif
                </div>
            </x-guest-layout>
        </div>
    </div>
    
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
