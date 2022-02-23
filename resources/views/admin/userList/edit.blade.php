@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('userList.index') }}"> Back</a>
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
        
    <form action="{{ '/admin/userList/' . $user->id }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name :</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username :</strong>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password :</strong>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{$user->password}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role :</strong>
                    <select name="role" id="" class="form-control">
                        <option value="Admin" @if ($user->role == 'Admin')selected @endif>Admin</option>
                        <option value="Manager" @if ($user->role == 'Manager')selected @endif>Manager</option>
                        <option value="Kasir" @if ($user->role == 'Kasir')selected @endif>Kasir</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection