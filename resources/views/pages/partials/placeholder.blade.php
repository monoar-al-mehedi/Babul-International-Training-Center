@extends('layouts.app')

@section('title', $title.' | '.config('app.name'))
@section('meta_description', $description ?? ($title.' — Babul International Training Center.'))

@section('content')
    <x-page-banner :title="$title" />

    <section class="section">
        <div class="container">
            <p class="text-muted mb-0">
                {{ $message ?? 'Content for this page will be added in the next development phase.' }}
            </p>
        </div>
    </section>
@endsection
