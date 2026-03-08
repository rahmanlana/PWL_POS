<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    // Beritahu Laravel nama tabel yang sebenarnya
    protected $table = 'm_level'; 
    
    // Beritahu Laravel primary key-nya
    protected $primaryKey = 'level_id';
}
