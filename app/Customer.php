<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\UserCustomerResetPasswordNotification;

class Customer extends User
{
    //
    protected $table="customers";
    
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
    	$this->notify(new UserCustomerResetPasswordNotification($token));
    }
    
}
