@component('mail::message')
    # Mail ontvangen

    Iemand heeft het online formulier ingevuld. {{ "\n" }}
    Hieronder volgen de details:

    * Naam: {{ $notification->name }}
    * Email: {{ $notification->email }}
    * Bericht: {!! $notification->message !!}
@endcomponent
