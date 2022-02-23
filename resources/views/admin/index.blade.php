@extends('layouts.master')
@section('content')
    Halo, selamat datang <b>{{ Auth::user()->name }}</b>. Ini adalah halaman admin, dimana hanya admin yang bisa mengakses halaman ini.
@endsection