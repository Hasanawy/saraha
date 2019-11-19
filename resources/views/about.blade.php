@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Abot Us') }}</div>

                <div class="card-body">
                	<h1>About Saraha</h1>
                	<p>
						Sarahah helps you in discovering your strengths and areas for improvement by receiving honest constructive feedback from your employees and your friends

					</p>	
					<hr>
					<h3>FAQ</h3>
					<br>

					<h5>Will Saraha show the identity of senders?</h5>
					<p>
						Sarahah won't disclose the identity of the logged-in senders to users except with their consent.
					</p>

					<hr>

					<h5>Is Sarahah a hacker?!</h5>
					<p>Saraha doesn't steal data but websites and apps impersonating Sarahah could do that</p>
					<hr>

					<h5>Can Saraha visitors view my messages?</h5>
					<p>They can't as long as you don't share your messages</p>
					<hr>

					<h5>Is there a Saraha mobile app?</h5>
					<p>No, the official Saraha app is not on Google Play and App Store yet</p>
					<hr>

					<h5>Can I respond to messages?</h5>
					<p>
You can't respond to messages now. We are studying this option
</p>
			
                </div>
            </div>
        </div>
    </div>
</div>
@endsection