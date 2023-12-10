@extends('base.app')
@section('title', 'Home & Riwayat')
@section('content')
    <div class="dashboard">
        @include("dashboard.components.header")
        @include("dashboard.components.profile_section")
    </div>
@endsection