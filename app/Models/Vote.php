<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected  $fillable = [
        'user_id',
        'image_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * vote user relationship with vote
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo("App\Models\User");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * vote image relationship
     */
    public  function  image(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo("App\Models\Image");
    }

}
