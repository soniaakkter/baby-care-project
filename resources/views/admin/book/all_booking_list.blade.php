@extends('layout.admin_master')
@section('title','All Booking List')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table" id="myTable">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Date</th>
                  <th scope="col">Pacakge</th>
                  <th scope="col">Payable</th>
                  <th scope="col">Paid</th>
                  <th scope="col">Status</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($data as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->package['name']}}</td>
                    <td>{{$item->payable}}</td>
                    <td>{{$item->paid}}</td>
                    <td>{{$item->payment_status}}</td>
                    <td class="text-right">
                  <a onclick="return confirm('Are you sure to Approve?')" href="{{action('DayCareController@approve',['id' => $item->id])}}" class="btn btn-sm btn-primary">Approve</a>
                  <a onclick="return confirm('Are you sure to delete?')" href="{{action('DayCareController@delete',['id' => $item->id])}}" class="btn btn-sm btn-danger">Delete</a>
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