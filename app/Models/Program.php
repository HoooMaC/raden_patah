<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function category() {
        return $this->belongsTo(ProgramCategory::class);
    }

    public static function getProgramsPerCategory($categoryId) {
        return Program::where('program_category_id', $categoryId)->get();
    }
}
