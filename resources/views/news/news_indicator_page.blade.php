@extends('base.app')
@section('title', 'Indikator Mutu')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("news.components.indicator_description_section")
        @include("news.components.indicator_purpose_section")
        @include("news.components.indicator_list_section")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection