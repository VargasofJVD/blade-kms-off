<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'class',
        'address',
        'admission_date'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'admission_date' => 'date'
    ];

    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return $this->date_of_birth->age;
    }
}
