{!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class' => 'form')) !!}

    <div>
        {!! Form::label('Username') !!} 
        {!! Form::text('username', old('username'), array('required',
      'class'=>'form-control',
      'placeholder'=>'Username')) !!}
    </div>

    <div>
        {!! Form::label('Password') !!} 
        {!! Form::password('password', array('required',
      'class'=>'form-control',
      'placeholder'=>'Password')) !!}
    </div>

    <div>
        {!! Form::checkbox('remember') !!} Remember Me
    </div>

    <div>
        {!! Form::submit('Login') !!}
    </div>
{!! Form::close() !!}