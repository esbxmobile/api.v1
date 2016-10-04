<?php
/**
 * Created by PhpStorm.
 * User: Giovani
 * Date: 10/4/2016
 * Time: 4:48 PM
 */

namespace Api\OAuth2;

use Illuminate\Support\Facades\Auth;

class PasswordVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}