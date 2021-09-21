@component('mail::message')
# Hey Admin

The body of your message.
- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
 {{$msg->message}}
@endcomponent


@component('mail::button', ['url' => ''])
Créer un compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
