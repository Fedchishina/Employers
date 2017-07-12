<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employers';
    protected $fillable = [
        'full_name',
        'date_beg_work',
        'position_id',
        'parent_id',
    ];

    public function position() {
        return  $this->hasOne('App\Position', 'position_id', 'id');
    }

    public function parent() {
        return  $this->hasOne('App\Employer', 'parent_id', 'id');
    }
}
