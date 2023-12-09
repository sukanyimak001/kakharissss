@extends('base.app')
@section('title', 'Vitreo Retina')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("services.components.about_poli_executive_section")
        @include("home.components.create_schedule")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection