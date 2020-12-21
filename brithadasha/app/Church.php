<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 'churchs';
    protected $primaryKey = 'ch_id';
    protected $guarded = [];
}
