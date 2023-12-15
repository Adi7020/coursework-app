<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Services\ExternalApiService;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $externalApiService;
    public function __construct(ExternalApiService $externalApiService)
    {
        $this->externalApiService = $externalApiService;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchInsert()
    {
                // Fetch questions from the external API
                $apiQuestions = $this->externalApiService->getQuestions();

                // Process and insert questions into the local database
                foreach ($apiQuestions as $apiQuestion) {
                    $question = new Question();
                    $question->question = $apiQuestion['question'];
                    // Assuming answers is an array, adjust accordingly if it's an object
                    $question->answer_a = $apiQuestion['answers']['answer_a'];
                    $question->answer_b = $apiQuestion['answers']['answer_b'];
                    $question->answer_c = $apiQuestion['answers']['answer_c'];
                    
                    $question->save();
                }
        
                // Retrieve questions from the local database
                $localQuestions = Question::all();
                return view('questions', compact('localQuestions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $localQuestions = Question::all(); 
        return view('questions', compact('localQuestions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
