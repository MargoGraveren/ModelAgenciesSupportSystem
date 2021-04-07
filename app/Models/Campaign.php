<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
//    use HasFactory;

    protected $fillable = ['title', 'description', 'category'];

//    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//        return $this->belongsTo('App\Models\User');
//    }
}
