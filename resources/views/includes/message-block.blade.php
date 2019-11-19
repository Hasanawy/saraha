
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-12 alert alert-danger  col-md-offset-4"  role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if(Session::has('msg'))
        <div class="row">
            <div class="col-md-12 alert alert-primary   col-md-offset-4"  role="alert">
               {{ Session::get('msg') }}
            </div>
        </div>
    @endif