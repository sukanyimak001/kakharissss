@extends('base.app')
@section('title', 'Detail Berita')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("news.components.news_detail_section")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection