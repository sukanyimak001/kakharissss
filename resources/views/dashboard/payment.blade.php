@extends('base.app')
@section('title', 'Home & Riwayat')
@section('content')
    <div class="dashboard">
        @include("home.components.header")
        @include("dashboard.components.payment_section")
    </div>
@endsection