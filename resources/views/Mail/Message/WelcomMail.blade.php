@component('mail::message')
# Introduction

Dear : {{ $username}} <br>
This Is course Project For You<br>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
