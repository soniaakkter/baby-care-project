@extends('layout.admin_master')
@section('title','Message')
@section('content')
@include('admin.message.inc.form')
<div class="card">
           
              <div class="card-header">
                <h3 class="card-title">All Messages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
              <thead class="thead-light">
                  @php
                      $i =1;
                  @endphp
                <tr>
                  <th scope="col">{{$i++}}</th>
                  <th scope="col">Name</th>
                  <th scope="col">New massage</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                
                   @foreach ($messages as $item)
                       <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->senders['name']}}</td>
                        <td>{{$item->message}}</td>
                      <td class="text-right">
                      {{--<a href="{{action('PackageController@update_package',['id' => $item->id])}}" class="btn btn-sm btn-primary">Reply</a>--}}
                      <a href="#" class="btn btn-sm btn-primary replyBtn" data-recipent="{{$item->sender}}">Reply</a>
                      </td>
                    </tr>
                   @endforeach
                    
                   
                
                    
              </tbody>
            </table>
              </div>
              <!-- /.card-body -->
              
            </div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(function () {
        $("#reply").hide();
        $(".replyBtn").click(function (e){
            e.preventDefault();
            $("#reply").show();
            var recipent = $(this).data('recipent');
            
            $("#reply [name = recipent]").val(recipent);
            
        });
    
    });
</script>
@endsection