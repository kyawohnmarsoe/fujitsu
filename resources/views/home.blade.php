@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fujitsu Customers List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
    </tr>
  </thead>
  <tbody>

  @if ($users)
    @foreach ($users as $key=>$user)
    <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->subject }}
          
        </td>
      </tr>
    @endforeach
  @endif


    
  </tbody>
</table>

{{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
