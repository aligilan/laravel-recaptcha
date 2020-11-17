<?php


namespace Biscolab\ReCaptcha\Traits;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

trait Recaptcha
{
    // Ask google to validate token
    public function recaptcha_validate(): array
    {
        $token = request()->input(config('recaptcha.default_token_parameter_name', 'token'), '');

        return recaptcha()->validate($token);
    }

    // Response validation result
    public function check_recaptcha_validation() : void
    {
        if(!$this->check_response()) throw ValidationException::withMessages([
            'recaptcha' => ['درخواست شما مشکوک تشخیص داده شده است'],
        ]);
    }

    // Check recaptcha response
    private function check_response() : bool
    {
        $response = $this->recaptcha_validate();
        return $response['success'] === true && $response['score'] > 0.5;
    }
}
