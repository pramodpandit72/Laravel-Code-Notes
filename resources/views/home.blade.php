@extends('layout.app')

@section('content')

{{-- <h1> My name is {{ $name }}</h1> --}}

<h1>This is Home page</h1>

<a href='/about1/about2/about3' class="underline">About</a>
<a href="{{ route('cont') }}" class="underline">Contact</a>

@endsection