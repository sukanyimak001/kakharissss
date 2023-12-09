@extends('base.app')
@section('title', 'List Berita & Informasi')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("news.components.service_rates_section")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection