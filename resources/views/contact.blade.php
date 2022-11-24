<!DOCTYPE html>
<html>
<head>
<title>DevDojo - Bobby Iliev - Contact Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Contact Me</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactpost', 'method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group {{ $errors->has('Nafn') ? 'has-error' : '' }}">
    {!! Form::label('Name:') !!}
    {!! Form::text('username', old('username'), ['class'=>'form-control', 'placeholder'=>'Nafn']) !!}
<span class="text-danger">{{ $errors->first('username') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    {!! Form::label('Símanúmer:') !!}
    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Símanúmer']) !!}
<span class="text-danger">{{ $errors->first('phone') }}</span>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::label('heimilisfang:') !!}
    {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Heimilisfang']) !!}
<span class="text-danger">{{ $errors->first('address') }}</span>
</div>

<div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
                {!! Form::label('Vinsamlega veljið þjónustu.') !!}
                {{Form::select('service',
                [ ''=>'',
                  'Almenn ráðgjöf' => 'Almenn ráðgjöf',
                  'Teppahreinsun' => 'Teppahreinsun',
                  'Djúphreinsun í heimahúsi' => 'Djúphreinsun í heimahúsi',
                  'Mottuhreinsun' => 'Mottuhreinsun',

                ], null,['class' => 'form-control'])}}

</div>


<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Skilaboðin þín....') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Skilaboðin þín....']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Send mail</button>
</div>

{!! Form::close() !!}

</div>

</body>
</html>