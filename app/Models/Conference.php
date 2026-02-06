<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;


    protected $fillable = [
        'language',
        'name',
        'subname',
        'information_letter_path',
        'program_path',
        'archive_path',
        'about',
        'start_date',
    ];

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
