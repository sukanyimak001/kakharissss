@extends('base.app')
@section('title', 'List Berita & Informasi')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("news.components.survey_section")
        <div class="section cta">
            <img src="{{ asset('assets/images/cta.png') }}" alt="" srcset="">
        </div>
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection