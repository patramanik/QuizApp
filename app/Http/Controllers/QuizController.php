<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function Quizentry()
    {
        return view('quiz.quizentry');
    }
    public function Quizlist()
    {
        return view('quiz.quizlisting');
    }
}
