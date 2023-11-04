<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{

    public function flower()
    {
        return $this->belongsTo(Flower::class, 'flower_id','id');
    }
    use HasFactory;
    protected $table = 'regions';
    protected $fillable = [
        'name',
        'flower_id',

        'region_name',
        'created_at',
        'updated_at',
    
    ];




}
