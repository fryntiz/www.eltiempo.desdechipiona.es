@extends('layouts.app')

{{-- Descripción sobre esta página --}}
@section('title', '')
@section('description', '')
@section('keywords', '')

{{-- Etiquetas para Redes sociales --}}
@section('rs-title', '')
@section('rs-sitename', '')
@section('rs-description', '')
@section('rs-image', '')
@section('rs-url', '')
@section('rs-image-alt', '')

@section('twitter-site', '')
@section('twitter-creator', '')

@section('content')
    @include('layouts.breadcrumbs')

    <div class="row">
        <div class="col-md-8 mb-5">
            Página de pruebas en blanco
        </div>

        <div class="col-md-4 mb-5">
            @include('layouts.sidebar')
        </div>
    </div>
@endsection
