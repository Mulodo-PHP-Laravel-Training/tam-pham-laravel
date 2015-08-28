@extends('app')
@section('content')
<h1>Contact</h1>
@if (Session::has('message'))
    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
@endif
@if (count($errors->all()) >0 )
<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li> @endforeach
</ul>
</div>
@endif
{!! Form::open(array('url' => 'contact', 'class' => 'form')) !!} 
<div class="form-group">
{!! Form::label('Your Name') !!}
{!! Form::text('name', null, array('required',
      'class'=>'form-control',
      'placeholder'=>'Your name')) !!}
</div>
<div class="form-group">
{!! Form::label('Your E-mail Address') !!}
{!! Form::text('email', null, array('required',
      'class'=>'form-control',
      'placeholder'=>'Your e-mail address')) !!}
</div>
<div class="form-group">
{!! Form::label('Your Message') !!}
{!!  Form::textarea('message', null, array('required',
              'class'=>'form-control',
              'placeholder'=>'Your message')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Contact Us!',
array('class'=>'btn btn-primary')) !!} </div>

{!! Form::close() !!}
@endsection