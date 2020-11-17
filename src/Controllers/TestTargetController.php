<?php
/**
 * Copyright (c) 2017 - present
 * LaravelGoogleRecaptcha - ReCaptchaController.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 4/2/2019
 * MIT license: https://github.com/biscolab/laravel-recaptcha/blob/master/LICENSE
 */

namespace Biscolab\ReCaptcha\Controllers;

use Biscolab\ReCaptcha\Traits\Recaptcha;
use Illuminate\Routing\Controller;

/**
 * Class ReCaptchaController
 * @package Biscolab\ReCaptcha\Controllers
 */
class TestTargetController extends Controller
{
    use Recaptcha;

	public function validateV3(): array
	{
	    // Captcha validation
	    $this->check_recaptcha_validation();

	    // Your other validations

        // Rest of the code ....
	}
}