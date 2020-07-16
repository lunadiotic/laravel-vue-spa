<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    /**
     * Belongs to User Model
     *
     * @return  [type]  [return description]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
