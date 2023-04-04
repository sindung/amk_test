<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'integer';
    // public $timestamps = true;
    protected $fillable = ['name', 'gender', 'nis', 'class_id'];
    public $incrementing = false;

    // relation many to one
    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }

    // relation many to many
    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
