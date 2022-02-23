@extends('layouts.master')
@section('content')
    Halo, selamat datang <b>{{ Auth::user()->name }}</b>. Ini adalah halaman manager, dimana hanya manager yang bisa mengakses halaman ini.
@endsection