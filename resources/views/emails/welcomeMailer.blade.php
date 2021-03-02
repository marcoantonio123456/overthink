@component('mail::message')
# Email Submittion

{{$details['email']}}
Has submitted a new form request

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
