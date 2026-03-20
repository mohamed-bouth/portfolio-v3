@extends('layouts.show')

@section('content')
    @include('portfolio.partials.navbar')
    @include('portfolio.partials.hero')
    @include('portfolio.partials.projects')
    @include('portfolio.partials.education')
    @include('portfolio.partials.contact')
    @include('portfolio.partials.footer')
@endsection