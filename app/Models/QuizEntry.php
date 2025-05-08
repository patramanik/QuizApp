<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizEntry extends Model
{
    protected $fillable = [
        'question',
        'options',
        'explanation',
        'correct_answer',
    ];

    protected $casts = [
        'options' => 'array', 
    ];
}
