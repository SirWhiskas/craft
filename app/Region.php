<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'regions';

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