@component('mail::message')
# Bonjour cher Admin

Il y a une nouvelle requette soumise au Cabinet Kalinda & Associé dans la plateforme virtuelle.
<br>
Venant de <strong> {{$msg->name}}</strong> <br>
Ayant comme adresse mail <strong>{{$msg->email}}</strong>

Contenu du Message :
@component('mail::panel')
 {{$msg->message}}
@endcomponent


@component('mail::button', ['url' => '/register'])
Créer un compte pour {{$msg->name}}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
