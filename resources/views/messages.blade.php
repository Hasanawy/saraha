@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
					 {!!Html::Image('/images/' . $user->avatar, 'User' ,array('class' => 'rounded-circle'))!!}
                    
                    <h4 class = "imagetext">{{$user->name}}</h4>
                    <p class = "bio">{{$user->bio}}</p>
                    <p>Share With :</p>
                    <a class = "btn btn-link" href = "https://www.facebook.com/sharer/sharer.php?u=sarahafces.epizy.com/{{$user->name}}%2Fprofile%2F1&quote=Leave%20a%20constructive%20message%20%3A)&hashtag=%23Sarahafces" target = "blank"><i class="fab fa-facebook fa-3x"></i></a>
                    <a class = "btn btn-link" href = "whatsapp://send?text=http://sarahafces.epizy.com/{{$user->name}}%0ALeave a constructive message :)" target = "blank"><i class="fab fa-whatsapp fa-3x"></i></a>
                    
                    
                </div>
            </div>
        </div>
    </div>

     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card messages">
            	<div class="card-header text-center "><span class="badge badge-primary badge-pill">{{$count}}</span> Messages </div>
                
                @foreach($messages as $message)

                <div class="card-body text-center">
                   
					
                   
				    <h5 class="card-text">{{$message->body}}</h5>
				    <p class="card-title"> At : {{ date('d F Y g:i A', strtotime($message->created_at)) }}</p>
                   
				    <a href="#" class="btn btn-primary">Share</a>
                   <a href="/delete/{{$message->id}}" class="btn btn-danger">Delete</a>
                   <hr>
                </div>
                
				@endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
