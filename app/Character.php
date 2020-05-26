<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'characters';

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'owner_id', 'name', 'description'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at'
    ];
}

?>