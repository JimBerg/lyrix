@extends ('layout.master')

@section('content')

@if($errors->has())
<div id="form-errors">
    <p>The following errors have occurred:</p>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    {{ Form::model(array('url' => 'user/register', 'class' => 'form-horizontal')) }}
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Benutzername</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Benutzername">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Passwort</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Passwort">
        </div>
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="col-sm-2 control-label">Passwort bestätigen</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Passwort bestätigen">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Registrieren</button>
        </div>
    </div>
    {{ Form::close() }}
@stop
