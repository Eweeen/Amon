@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/team.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content") 
    <main>
        
    </main>
@endsection

@section("script")

    <script type="text/javascript" src="{{ asset('js/team.js') }}"></script>

@endsection