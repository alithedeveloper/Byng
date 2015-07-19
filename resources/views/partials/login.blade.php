{!! Form::open(['route'=>'login_path', 'class' => 'login-form']) !!}

<div class="input-group">
    <span class="input-group-addon">@</span>
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'john.smith@email.com']) !!}
</div>
<div class="input-group">
    <span class="input-group-addon"><i class="fa fa-key"></i> </span>
    {!! Form::password('password',['class'=>'form-control','placeholder' => 'password']) !!}
    
</div>

{!! Form::submit('Login',['class'=>'btn btn-block btn-danger'])  !!}
{!! Form::close() !!}

