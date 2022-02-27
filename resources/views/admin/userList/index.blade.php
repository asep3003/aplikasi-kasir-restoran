@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('userList.create') }}"> Create</a>
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
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
            <th width="112px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('userList.destroy',$user->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('userList.edit',$user->id) }}">
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
    
    {!! $users->links() !!}
        
@endsection