<?php

namespace App\Http\Controllers;

use App\Models\QuizEntry;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function Quizview()
    {
        return view('quiz.quizentry');
    }
    public function Quizlist()
    {
        return view('quiz.quizlisting');
    }
    public function Quizentry(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|string',
            'options' => 'required|array|min:2',
            'options.*' => 'required|string',
            'correct_answer' => 'required|integer',
            'explanation' => 'nullable|string',
        ]);


        $formattedOptions = [];
        foreach ($validatedData['options'] as $index => $option) {
            $formattedOptions[$index + 1] = $option;
        }


        $quizData = [
            'question' => $validatedData['question'],
            'options' => json_encode($formattedOptions),
            'correct_answer' => $validatedData['correct_answer'],
            'explanation' => $validatedData['explanation'] ?? null,
        ];
        // dd($quizData);

        QuizEntry::create($quizData);

        return response()->json(['message' => 'Quiz question saved successfully!']);
    }
}
