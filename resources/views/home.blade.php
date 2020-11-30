@extends('templates.structures')

@section('content')
    <section class="container">
        @include('about.about')
        @include('fact.fact')
        @include('skill.skill')
        @include('portfolio.portfolio')
        @include('contact.contact')

    </section>

    
@endsection