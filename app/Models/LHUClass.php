<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHUClass extends Model
{
    use HasFactory;
    protected $table="classes";
    protected $fillable=[
        'department',
        'classname',
        'grade',
        'classroom',
        'teacher',
    ];
    public function Student(){
        return $this->hasMany('App\Models\Student','cid');
    }
    /**public function scopeclass($query,$lhuclass){
        $query->where('lhuclass','=',$lhuclass);
    }**/
}
