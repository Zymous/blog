<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'Links';
    protected $primaryKey = 'link_id';
    public $timestamps = false;
    protected $guarded = [];
}
