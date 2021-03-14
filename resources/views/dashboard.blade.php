<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Care</title>
    
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">
  <style>

.message-blue {
    position: relative;
    margin-left: 20px;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #A8DDFD;
    width: 400px;
    height: auto;
    text-align: left;
    font: 400 .9em 'Open Sans', sans-serif;
    border: 1px solid #97C6E3;
    border-radius: 10px;
}

.message-orange {
    position: relative;
    margin-bottom: 10px;
    margin-left: calc(100% - 412px);
    padding: 10px;
    background-color: #f8e896;
    width: 400px;
    height: auto;
    text-align: right;
    font: 400 .9em 'Open Sans', sans-serif;
    border: 1px solid #dfd087;
    border-radius: 10px;
}

.message-content {
    padding: 0;
    margin: 0;
}

.message-timestamp-right {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    right: 5px;
}

.message-timestamp-left {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    left: 5px;
}

.message-blue:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 15px solid #A8DDFD;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    top: 0;
    left: -15px;
}

.message-blue:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 17px solid #97C6E3;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    top: -1px;
    left: -17px;
}

.message-orange:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 15px solid #f8e896;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    bottom: 0;
    right: -15px;
}

.message-orange:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 17px solid #dfd087;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    bottom: -1px;
    right: -17px;
}
section.chat_section {
    border: 5px solid #ccc;
    box-sizing: border-box;
    margin: 28px;
    padding: 20px;
    height: 400px;
    overflow-y: scroll;
}
</style>


   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>   
   @include('shared.header')

    
     <section id="service"  class="our_service_area">
    
    	<div class="container">
        
			<div class="row">
            
            	<h2>Dash<span class="wpm_color_word">Board</span></h2>
                
                <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
                @php
                    $i = 1;
                @endphp   
          
            </div> 
            <h3 style="margin-bottom: 6px;" >Personal information</h3>
            <div class="row">
                
                <form role="form"  method="post" action="{{action('DashboardController@message')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            
                          <div class="form-group">
                            <input type="text" class="form-control" value="{{Auth::user()->name}}"  readonly>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" value="{{Auth::user()->email}}" placeholder="Input Number" readonly>
                          </div>
                          
                          <h3 style="margin-bottom: 6px;" >Send Message</h3>
                          
                          <div class="form-group">
                            <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        
                    
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>     
            </div>      
        
        </div>
    
    </section>
    
    <section class="chat_section" style="margin-top: 50px;">
      
      
      <div class="container">
        <h4 style="margin-bottom: 15px;">Messages</h4>
        <hr>
        @foreach ($messages as $item)
          <div class="@if($item->from == Auth::user()->id) message-orange @else message-blue @endif">
            <p class="message-content">{{$item->message}}</p>
          </div>
      @endforeach
    </div>
     </section>
   
   
   
    
   <!-- footer -->
   <section class="wpm_frooter_ending " style="margin-top: 50px;">
     	
        <div class="container">
            
            <div class="col-sm-12 wpm_mobile_center">
                <div class="footer-icon">
                <div class="social">
                <a href=""><img src="{{asset('/icon/facebook.png')}}" alt=""></a>
                
                <a href=""><img src="{{asset('/icon/instagram.png')}}" alt=""></a>
                
                <a href=""><img src="{{asset('/icon/twitter.png')}}" alt=""></a>
                
                <a href=""><img src="{{asset('/icon/linkedin.png')}}" alt=""></a>
                
            </div>
            <div class="logo-footer">
                <img src="{{asset('/icon/logo.png')}}" alt="">
            </div>
            
                    <div class="contacts">
                    <a href=""><img src="{{asset('/icon/call.svg')}}" alt=""> <span>0179853585</span></a>
                    <a href=""><img src="{{asset('/icon/gmail.svg')}}" alt=""> <span>infobabycare@gmail.com</span></a>
                    </div>
                </div>

           

                    <p>Copyright &copy; <a href="#" target="_blank">{{date('Y')}}</a></p>
             </div>  
             
         </div>   
            
     </section> 
   
    <script src="{{asset('/js/jquery.min.js') }}"></script>
    <script src="{{asset('/js/custom.js') }}"></script>
   </body>
   </html>