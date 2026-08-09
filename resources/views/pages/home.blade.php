@extends('layouts.app')

@section('title', 'Babul International Training Center (BITC) | Professional Skills Training in Bangladesh')
@section('meta_description', 'Babul International Training Center provides professional skills training, overseas work permit processing, and visa documentation services in Bangladesh.')

@section('content')
    @include('components.hero-carousel')
    @include('components.about-teaser')
    @include('components.training-services')
    @include('components.core-services')
    @include('components.running-events')
@endsection
