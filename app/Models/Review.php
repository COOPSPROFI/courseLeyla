<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'name', 'description', 'img'];

    protected $with = ['Course'];

    public function Course() {
        return $this->BelongsTo(Course::class);
    }
}
