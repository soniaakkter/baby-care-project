<div class="row">
    <div class="col-md-2"></div>
<div class="card col-md-8" id="reply">
    <form role="form" method="POST" action="{{action('AdminMessageController@message_reply')}}">
        @csrf
        <input type="hidden" name="to">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Reply customer message</label>
            <input type="text" class="form-control" name="message" placeholder="Enter your reply" required>
          </div>
            <button type="submit" class="btn btn-primary">Send</button>   
        </div>
    </form>
</div>
</div>