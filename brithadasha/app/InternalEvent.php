<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalEvent extends Model
{
    protected $table = 'internal_events';
    protected $primaryKey = 'inevent_id';
    protected $guarded = [];
}
