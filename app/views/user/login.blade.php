@extends ('layout.master')

@section('content')
    {{ Form::model(array('url' => 'user/login', 'class' => 'form-horizontal', 'role' => 'form')) }}
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Benutzername</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Benutzername" />
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Passwort</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox" /> Vergiss' mich nicht!
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">anmelden</button>
        </div>
    </div>
    {{ Form::close() }}
@stop
