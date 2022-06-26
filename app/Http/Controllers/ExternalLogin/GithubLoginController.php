<?php

namespace App\Http\Controllers\ExternalLogin;

use App\Http\Controllers\AbstractExternalLoginController;

class GithubLoginController extends AbstractExternalLoginController
{
    protected function getServiceSlug(): string
    {
        return 'github';
    }    
}