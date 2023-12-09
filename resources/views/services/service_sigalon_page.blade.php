@extends('base.app')
@section('title', 'Vitreo Retina')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        @include("services.components.sigalon_intro_section")
        @include("services.components.sigalon_about_section")
        @include("services.components.sigalon_procedure_section")
        @include("services.components.faq")
        @include("home.components.create_schedule")
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection