@component('mail::message')
    # What other user contact with

    Hi {{ $user->name }}

    @component('mail::button', ['url' => route('about')])
        About the company
    @endcomponent

    @component('mail::panel')
        {{ $contact->message }}
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
