<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameWorld extends Model
{

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'game_world';

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'owner_id', 'world_id', 'region_id', 'location_id', 'character_id'
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