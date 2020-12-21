<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalEvent extends Model
{
    protected $table = 'global_events';
    protected $primaryKey = 'event_id';
    protected $guarded = [];
}
