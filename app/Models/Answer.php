<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
    public function questions()
    {
        return $this->belongTo(User::class);
        return $this->belongTo(Question::class);
    }
}