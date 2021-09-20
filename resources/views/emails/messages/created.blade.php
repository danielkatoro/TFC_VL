@component('mail::message')
# Hey Admin

The body of your message.
- {{$name}}
- {{$email}}

@component('mail::panel')
 {{$msg}}
@endcomponent


@component('mail::button', ['url' => ''])
Créer un compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
