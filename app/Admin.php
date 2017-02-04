<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\UserAdminResetPasswordNotification;

class Admin extends User
{
    //
	protected $table="admins";
	
	/**
	 * Send the password reset notification.
	 *
	 * @param  string  $token
	 * @return void
	 */
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new UserAdminResetPasswordNotification($token));
	}
}
