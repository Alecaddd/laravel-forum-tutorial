@extends('index')

@section('content')
    @component('partials.hero')
        About Page
    @endcomponent

    @include('partials.nav')
@endsection