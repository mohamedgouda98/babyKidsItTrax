<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['question', 'answer'];

    public static function rules()
    {
        return [
            'question' => 'required|min:5',
            'answer' => 'required|min:5',
        ];
    }

    public static function deleteRules()
    {
        return [
            'faq_id' => 'required|exists:faqs,id'
        ];
    }
}
