@component('mail::message')
# Hello!
  @component('mail::panel')
  ## Thank you for successfully completing the first stage of your registration.
  ## Your Registration Number is: {{$user->registration_number}}
  ## Your password is in this format: surname + firstname + 123.
  ## Note: Password must be in capital letters
  ## Example: JOHNDOE123

  @component('mail::button', ['url' => url('admission/login'), 'color'=> 'green'])
  Login
  @endcomponent
@endcomponent

## Regards,<br>
## Moje University.
@endcomponent
