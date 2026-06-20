@extends('layouts.app')

@section('content')

<h1>Oil Change Check</h1>

<form method="POST" action="{{ route('oil-check.store') }}">

    @csrf

    <label>Current Odometer</label>

    <input
        type="number"
        name="current_odometer"
        value="{{ old('current_odometer') }}"
    >

    @error('current_odometer')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Date of Previous Oil Change</label>

    <input
        type="date"
        name="previous_oil_change_date"
        value="{{ old('previous_oil_change_date') }}"
    >

    @error('previous_oil_change_date')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Odometer at Previous Oil Change</label>

    <input
        type="number"
        name="previous_oil_change_odometer"
        value="{{ old('previous_oil_change_odometer') }}"
    >

    @error('previous_oil_change_odometer')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">
        Check Oil Change Status
    </button>

</form>

@endsection