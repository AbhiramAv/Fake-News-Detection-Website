<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;

class SurveyController extends Controller
{
    public function index($id)
    {

        $userID = Auth::user()->id;

        $response = DB::select('select * from users where id = "'.$id.'"');
        $response = $response[0];
        
        $surveyResponses = DB::select('select * from survey_responses where user_id = "'.$userID.'"');

        return view('dashboard',compact('id', 'response', 'surveyResponses'));
    }

    public function dashboard($id) {
        //
    }

    public function SurveyCreate(Request $request) {

        // dd($currentURL);
        $currentURL = url()->full();

        $firstHalf = explode('article/',$currentURL);

        $userID = Auth::user()->id;

        $question_1_answer = $_GET['question_1'];
        $question_2_answer = $_GET['question_2'];
        $question_3_answer = $_GET['question_3'];
        $question_4_answer = $_GET['question_4'];
        $question_5_answer = $_GET['question_5'];

        $id = trim(explode('/',$firstHalf[1])[0]);

        $response = DB::insert("insert into survey_responses (user_id, answer1, answer2, answer3, answer4, answer5) values ('".$userID."','".$question_1_answer."','".$question_2_answer."','".$question_3_answer."','".$question_4_answer."','".$question_5_answer."')");

        $surveyResponses = DB::select('select * from survey_responses where user_id = "'.$userID.'" ');
      
        $response = $response;

        return view('search.pane',compact('id', 'response', 'surveyResponses'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        return "form data is here";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
