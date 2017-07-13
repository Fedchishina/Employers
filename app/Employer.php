<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Employer extends Model
{
    use NodeTrait;
    protected $table = 'employers';
    protected $fillable = [
        'full_name',
        'date_beg_work',
        'position_id',
        'parent_id',
    ];

    public function position() {
        return  $this->hasOne('App\Position', 'id', 'position_id');
    }

    public function parent() {
        return  $this->hasOne('App\Employer', 'id', 'parent_id');
    }
}
