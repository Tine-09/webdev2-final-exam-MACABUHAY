<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibleStudyRequest extends Model
{
    use HasFactory;

    protected $table = 'bible_study_request';
    public $timestamps=false;
}
