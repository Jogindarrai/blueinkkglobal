<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * Fields allowed for mass assignment.
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'service',
        'message',
        'source_page',
        'source_url',
        'referrer_url',
        'status',
        'assigned_to',
        'admin_notes',
        'ip_address',
        'user_agent',
        'additional_data',
    ];

    /**
     * Attribute casting.
     */
    protected $casts = [
        'additional_data' => 'array',
    ];
}