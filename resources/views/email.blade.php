@component('mail::message')


    The body of your message.


@component('mail::button', ['url' => ''])
    Button text

    @endcomponent


Thanks,<br>
    {{ config('app.name') }}
    @endcomponent