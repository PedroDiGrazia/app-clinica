<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class SecretariaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< Updated upstream
            'rs' => ['required', 'string'],
=======
            'registrosec' => ['required', 'string'],
>>>>>>> Stashed changes
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

<<<<<<< Updated upstream
        if (! Auth::attempt($this->only('rs', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'rs' => trans('auth.failed'),
=======
        if (! Auth::attempt($this->only('registrosec', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'registrosec' => trans('auth.failed'),
>>>>>>> Stashed changes
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the Secretaria request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
<<<<<<< Updated upstream
            'rs' => trans('auth.throttle', [
=======
            'registrosec' => trans('auth.throttle', [
>>>>>>> Stashed changes
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
<<<<<<< Updated upstream
        return Str::transliterate(Str::lower($this->input('rs')).'|'.$this->ip());
=======
        return Str::transliterate(Str::lower($this->input('registrosec')).'|'.$this->ip());
>>>>>>> Stashed changes
    }
}
