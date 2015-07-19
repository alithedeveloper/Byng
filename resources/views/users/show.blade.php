@extends( 'master' )

@section( 'content' )

    @include('partials/banner_update')

    <div class="main-content update-page">
        <div class="continer">
            <div class="col-sm-4 col-sm-offset-4">
                <h2 class="main-content__heading">UPDATE</h2>


                {!! Form::open(['url' => '/update/'.Auth::user()->username, 'class' => 'form']) !!}

                <div class="form-group">
                    {!! Form::text( 'username' , $user->username, [ 'class' => 'form-control' ])  !!}
                </div>
                <div class="form-group">
                    {!! Form::text( 'password' , null, [ 'class' => 'form-control', 'placeholder' => 'New Password'])  !!}
                </div>
                <div class="form-group">
                    {!! Form::text( 'first_name' , $user->first_name, [ 'class' => 'form-control','placeholder'=>'First Name' ])  !!}
                </div>
                <div class="form-group">
                    {!! Form::text( 'surname' , $user->surname, [ 'class' => 'form-control','placeholder'=>'Surname' ])  !!}
                </div>
                <div class="form-group">
                    {!! Form::text( 'website' , $user->website, [ 'class' => 'form-control','placeholder'=>'Website URL' ])  !!}
                </div>
                <div class="form-group">
                    {!! Form::submit( 'Save' , [ 'class' => 'btn btn-block btn-success'])  !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
@stop