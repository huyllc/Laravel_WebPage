@component('mail::message')
# Welcome to our website

Dear {{ $user->name }},

Thank you for registering on our website! Please click the button below to verify your email address and complete your registration.

@component('mail::button', ['url' => url('/verify-email/' . $this->token)])
Verify Email
@endcomponent


If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
