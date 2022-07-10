@extends('layouts.app-master')

@section('content')


    <div class="bg-light p-4 rounded">
        <h1>Entries</h1>
        <div class="lead">
            Manage your entries here.
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new Entries</a>
        </div>
        
      

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="1%">Name</th>
                <th scope="col" width="15%">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>  
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d-M-Y', strtotime($user->created_at)) }}</td>
                        @if($user->completed == 0)
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Mark as Complete</a>
                        @else
                        <td>Completed
                        @endif
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}</td>
                        
                           
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>
@endsection
