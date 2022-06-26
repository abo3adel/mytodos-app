<?php

namespace App\Http\Controllers\ExternalLogin;

use App\Http\Controllers\AbstractExternalLoginController;

class GoogleLoginController extends AbstractExternalLoginController
{
    protected function getServiceSlug(): string
    {
        return 'google';
    }    
}
