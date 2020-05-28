@component('mail::message')
# Hola {{ $user }}

Bienvenido a Cookie Commerce.

En donde encontraras galletas de cualquier parte del mundo.


<br> Disfruta de tus galletas,<br>
{{ config('app.name') }}
@endcomponent
