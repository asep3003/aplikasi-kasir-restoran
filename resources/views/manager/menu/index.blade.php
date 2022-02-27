@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Menu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('menu.create') }}"> Create</a>
            </div>
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Ketersediaan</th>
            <th width="115px">Action</th>
        </tr>
        @foreach ($menus as $menu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $menu->nama_menu }}</td>
            <td>Rp {{ number_format($menu->harga,0,',','.') }}</td>
            <td>{{ $menu->deskripsi }}</td>
            <td>{{ $menu->ketersediaan }}</td>
            <td>
                <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('menu.edit',$menu->id) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $menus->links() !!}
@endsection