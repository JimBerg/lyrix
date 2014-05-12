@extends ('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            {{ Form::open(array('url'=>'search/index', 'method'=>'post',  'class' => 'form-horizontal')) }}
            <div class="form-group">
                <label for="search" class="col-sm-2 control-label">Suche</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">suchen</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

    @if(sizeof($items) > 0)
        @foreach($items as $item)
            <p>{{ $item->content }}</p>
        @endforeach
        @else
        keine resultat
    @endif
@stop
