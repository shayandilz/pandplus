@extends('layout.main')

@section('content')

<div class="home">
    @include('partials.homepage.hero')

    @include('partials.homepage.svg-section')

    @include('partials.homepage.portfolio')

    @include('partials.homepage.testimonial')

    @include('partials.homepage.blog')

    @include('partials.homepage.social')

</div>


@endsection
