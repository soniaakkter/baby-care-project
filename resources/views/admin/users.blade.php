@extends('layout.admin_master')
@section('title','Review List')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Review</th>
                  <th scope="col">Status</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                    $data = App\User::where('id','!=',Auth::user()->id)->get();
                @endphp

                @foreach ($data as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->userType}}</td>
                    <td class="text-right">
                  @if($item->userType == 'Admin')
                  <a onclick="return confirm('Are you sure to make make User?')" href="{{action('UsersController@make_user',['id' => $item->id])}}" class="btn btn-sm btn-primary">Make User</a>
                  @else
                  <a onclick="return confirm('Are you sure to make make admin?')" href="{{action('UsersController@make_admin',['id' => $item->id])}}" class="btn btn-sm btn-primary">Make Admin</a>
                  @endif
                  </td>
                </tr>
                @endforeach
                    
              </tbody>
            </table>
              </div>
            </div>
@endsection
@section('script')
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script>
    $(function () {
        $(document).ready( function () {
           $('#myTable').DataTable();
        } );
    
    });
</script>
@endsection