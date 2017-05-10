<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aircall_call_id',
		'user_id',
		'status',
		'direction',
		'started_at',
		'answered_at',
		'ended_at',
		'duration',
		'raw_digits',
		'voicemail',
		'recording',
		'archived',
		'number'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'started_at'
    ];
}