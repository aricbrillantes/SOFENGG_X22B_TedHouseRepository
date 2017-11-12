@extends('layouts.profilelayout')
@include('tempstyle.profilestyle')

@section('UserName')
    {{ Auth::user()->name }}
@endsection

@section('Occupation')
    {{ Auth::user()->occupation }}
@endsection

@section('Bio')
    {{ Auth::user()->bg_info }}
@endsection

@section('Date')
    {{ Auth::user()->created_at }}
@endsection