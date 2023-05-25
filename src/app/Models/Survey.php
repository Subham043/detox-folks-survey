<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="surveys";

    protected $guarded = [];

    public function Staff()
    {
        return $this->belongsTo('App\Models\User', 'user_id')->withDefault();
    }

}
