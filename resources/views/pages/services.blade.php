@extends('layouts.app')

@section('title', 'Our Services | Babul International Training Center - BITC')
@section('meta_description', 'Explore Babul International Training Center core services — job placement, manpower training, visa processing, travel, counseling, and post-placement support.')

@section('content')
    <x-page-banner title="Our Services" />

    @include('components.core-services')
@endsection
