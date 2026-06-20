@extends('layouts.app')

@section('content')

<h1>Oil Change Result</h1>

@if($oilChangeCheck->is_due)

<div class="due">
    This vehicle IS due for an oil change.
</div>

@else

<div class="not-due">
    This vehicle is NOT due for an oil change.
</div>

@endif

<p>
    <strong>Current Odometer:</strong>
    {{ $oilChangeCheck->current_odometer }}
</p>

<p>
    <strong>Date of Previous Oil Change:</strong>
    {{ $oilChangeCheck->previous_oil_change_date }}
</p>

<p>
    <strong>Previous Oil Change Odometer:</strong>
    {{ $oilChangeCheck->previous_oil_change_odometer }}
</p>

<p>
    <strong>Kilometers Driven:</strong>
    {{ $kilometersDriven }}
</p>

<br>

<a
    href="{{ route('oil-check.create') }}"
    class="button"
>
    Check Another Car
</a>

@endsection