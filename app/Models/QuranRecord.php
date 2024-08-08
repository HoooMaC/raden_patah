<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuranRecord extends Model
{
    use HasFactory;

    protected $primaryKey = 'QuranRecordID';
    
    protected $guarded = [
        'id',
    ];
}
