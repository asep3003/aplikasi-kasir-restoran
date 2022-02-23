@extends('layouts.master')
@section('content')
    Halo, selamat datang <b>{{ Auth::user()->name }}</b>. Ini adalah halaman kasir, dimana hanya kasir yang bisa mengakses halaman ini.
@endsection