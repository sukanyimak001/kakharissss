@extends('base.app')
@section('title', 'Home & Riwayat')
@section('content')
    <div class="dashboard">
        @include("home.components.header")
        {{-- @include("dashboard.components.home_section") --}}
        @include("dashboard.components.meeting_section")
    </div>
@endsection