@extends('index')

@section('content')
    @component('partials.hero')
        Blog Page
    @endcomponent

    @include('partials.nav')
@endsection