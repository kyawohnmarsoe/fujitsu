@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fujisu Customers List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
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
        <th>{{ ++$key }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if ($user->subject == 2)
          <span>A brand new air conditioner</span>
          @elseif ($user->subject == 3)
          <span>A replacement to my old unit</span>
          @else 
          <span>Not Specify</span>
          @endif
        </td>
      </tr>
    @endforeach
  @endif


    
  </tbody>
</table>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
