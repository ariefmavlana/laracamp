<x-mail::message>
    # Welcome to the Laracamp

    Hi {{ $user->name }},
    <br>
    Welcome to the Laracamp. We are excited to have you on board. You can now start exploring the platform and start
    your journey with us.

    <x-mail::button :url="route('login')">
        Login to Laracamp
    </x-mail::button>

    Thanks,
    <br>
    {{ config('app.name') }}
</x-mail::message>
