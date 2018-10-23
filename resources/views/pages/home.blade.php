@extends('index')

@section('content')
    @component('partials.hero')
        Home Page
    @endcomponent

    @include('partials.nav')
@endsection