<x-mail::message>
    # Introduction

    Hi {{ $checkout->User->name }},
    Your order has been paid successfully. Enjoy your <b>{{ $checkout->Camp->title }}</b> and have a great time.

    <x-mail::button :url="route('user.dashboard')">
        My Dashboard
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
