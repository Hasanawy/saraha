@extends('layouts.app')

@section('content')
<div class="container">
      @include('includes.message-block')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center ">Leave Me A Message</div>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					{!!Html::Image('/images/' . $user->avatar, 'User' ,array('class' => 'rounded-circle'))!!}
                    
                    <h5 class = "imagetext">{{$user->name}}</h5>
                    <p class = "bio">{{$user->bio}}</p>
                    <p>Share With :</p>
                    <a class = "btn btn-link" href = "https://www.facebook.com/sharer/sharer.php?u=sarahafces.epizy.com/{{$user->name}}%2Fprofile%2F1&quote=Leave%20a%20constructive%20message%20%3A)&hashtag=%23Sarahafces" target = "blank"><i class="fab fa-facebook fa-3x"></i></a>
                    <a class = "btn btn-link" href = "whatsapp://send?text=http://sarahafces.epizy.com/{{$user->name}}%0ALeave a constructive message :)" target = "blank"><i class="fab fa-whatsapp fa-3x"></i></a>
                    
                     <hr>


                    <section class="row justify-content-md-center new-post">
                        <div class=" col-md-10  ">
                            <form action="{{route('send')}}" method="post"  >
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="hidden" name="name" value="{{$user->name}}" >
                                    <textarea class = "form-control" name="body" id="new-post" rows="5" placeholder="Leave Me A Constractive Message"></textarea>
                                </div>
                                <button class = "btn btn-primary "type="submit">Send</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
