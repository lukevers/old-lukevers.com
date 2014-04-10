@include('sections/header')

    <body>
        <div class="login">
        	<div class="text text-center">
        		<i class="fa fa-bullseye fa-3x"></i>
				<br/>Hostcrafted Admin Panel
        	</div><hr>
	    	{{ Form::open(array('route' => 'sessions.store')) }}
				<ul>
					<li>
						{{ Form::text('username', Input::old('username'), array('placeholder'=>'Username')) }}
					</li>
					<li>
						{{ Form::password('password', array('placeholder' => 'Password')) }}
					</li>
					<li>
						{{ Form::submit('&#xf00c;') }}
					</li>
				</ul>
			{{ Form::close() }}
		</div>
    </body>
</html>
