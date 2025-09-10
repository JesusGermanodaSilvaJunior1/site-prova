<?php

// app/Http/Controllers/QuizController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
{
    $quiz = Quiz::all();
    return response()->json($quiz);
}

public function store(Request $request)
{
    $quiz = new Quiz();
    $quiz->question = $request->input('question');
    $quiz->answer = $request->input('answer');
    $quiz->save();
    return response()->json($quiz, 201);
}
