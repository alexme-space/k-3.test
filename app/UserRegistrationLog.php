<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Registration log for users
 *
 * One-to-one relation is not a good idea here,
 * but test tasks required this functionality
 */
class UserRegistrationLog extends Model
{
    /**
     * Turn off default timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
