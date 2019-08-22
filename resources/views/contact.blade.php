
@extends('layouts.app')
@section('content')


<h1>contact</h1>


{{ Form::open(array('url' => 'contact/submit')) }}
  

<div class="form-group">


{{Form::label('name', 'Name')}}
{{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter Name'])}}
</div>
<div class="form-group">


{{Form::label('email', 'email Address')}}
{{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter E-mail'])}}
</div>
<div class="form-group">


{{Form::label('message', 'Msessage')}}
{{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter Message'])}}

{{Form::submit('submit', ['class'=>'btn btn-primary'])}}
</div>

{{ Form::close() }}

@endsection

