<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Answer;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'order',
    ];

    /**
     * Get question answers.
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
