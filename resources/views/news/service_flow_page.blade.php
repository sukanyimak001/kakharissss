@extends('base.app')
@section('title', 'List Berita & Informasi')
@section('content')
    <div class="base-page">
        @include("home.components.header")
        <div class="section service-flow">
            @include("news.components.service_flow_1_section")
            @include("news.components.service_flow_2_section")
            @include("news.components.service_flow_3_section")
            @include("news.components.service_flow_4_section")
            @include("news.components.service_flow_5_section")
        </div>
        @include("home.components.cta")
        @include("home.components.contact_us")
        @include("home.components.footer")
    </div>
@endsection