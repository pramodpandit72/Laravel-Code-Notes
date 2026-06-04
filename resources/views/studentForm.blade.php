{{-- @extends('layout.app')

@section('content') --}}


<form action="/submit-form" method="POST">

    @csrf

    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    Email:
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    Course:
    <input type="text" name="course" value="{{ old('course') }}">
    @error('course')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Submit</button>

</form>

{{-- @endsection --}}