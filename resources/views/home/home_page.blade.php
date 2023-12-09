@extends('base.app')
@section('title', 'Beranda')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("home.components.welcome_section")
        @include("home.components.our_service")
        @include("home.components.about_us")
        @include("home.components.specialist_section")
        @include("home.components.news_section")
        @include("home.components.gallery_section")
        @include("home.components.create_schedule")
        @include("home.components.faq")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection