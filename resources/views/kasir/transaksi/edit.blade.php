{{-- @extends('layouts.kasir')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transaksi.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ '/kasir/transaksi/' . $transaksi->id }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pelanggan :</strong>
                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" value="{{$transaksi->nama_pelanggan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Menu :</strong>
                    <select class="form-control" name="menu">
                        @foreach($menus as $menu)
                        <option value="{{$menu->menu}}" @if($transaksi->menu == $menu->menu)selected @endif>{{$menu->menu}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Menu :</strong>
                    <select class="form-control" name="menu">
                        @foreach($transaksis as $transaksi)
                        <option value="{{$transaksi->menu}}">{{$transaksi->menu}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Harga :</strong>
                    <input type="number" name="total_harga" class="form-control" placeholder="Total Harga" value="{{$transaksi->total_harga}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role :</strong>
                    <input type="text" name="role" class="form-control" placeholder="Role" value="{{$user->role}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection --}}