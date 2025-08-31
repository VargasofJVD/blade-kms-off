<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'date_of_birth',
        'gender',
        'class_applying_for',
        'parent_name',
        'parent_phone',
        'parent_email',
        'address',
        'previous_school',
        'reason_for_transfer',
        'status',
        'notes'
    ];

    protected $casts = [
        'date_of_birth' => 'date'
    ];

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => '<span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">Pending</span>',
            'approved' => '<span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Approved</span>',
            'rejected' => '<span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Rejected</span>',
            default => '<span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Unknown</span>'
        };
    }

    public function getAgeAttribute()
    {
        return $this->date_of_birth->age;
    }
}
