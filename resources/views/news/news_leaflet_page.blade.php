@extends('base.app')
@section('title', 'List Berita & Informasi')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("news.components.about_leaflet_section")
        @include("news.components.leaflet_list_section")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection