@extends('base.app')
@section('title', 'Home & Riwayat')
@section('content')
    <div class="dashboard">
        @include("dashboard.components.header")
        @include("dashboard.components.service_section")
    </div>
@endsection