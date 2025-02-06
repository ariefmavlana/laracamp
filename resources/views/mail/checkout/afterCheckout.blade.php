@component('mail::message')
    # Register Camp: {{ $checkout->Camp->title }}

    Hi {{ $checkout->User->name }},

    Thank you for registering for the {{ $checkout->Camp->title }} camp. We are excited to have you join us.

    @component('mail::button', ['url' => route('dashboard')])
        Go to Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
