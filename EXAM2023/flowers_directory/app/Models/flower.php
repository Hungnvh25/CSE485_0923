<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flower extends Model
{
    public function region()
    {
        return $this->hasMany(Region::class, 'flower_id','id');
    }


    use HasFactory;
    protected $table = 'flowers';
    protected $fillable = [
        'name',
        'description',

        'image_url',
        'created_at',
        'updated_at',

    ];


}
