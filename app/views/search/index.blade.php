@extends ('layout.master')

@section('content')
    {{ Form::open(array('url'=>'search/index', 'method'=>'get')) }}
    <div class="form-group">
        <label for="search" class="col-sm-2 control-label">Suche</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="search" name="search" placeholder="Suche">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">suchen</button>
        </div>
    </div>
    {{ Form::close() }}
    @if($search != null)
    <div class="col-sm-10">
        @if(sizeof($items) > 0)
            @foreach($items as $item)
                <p>{{ $item->content }}</p>
            @endforeach
            @else
            <p>keine resultat</p>
        @endif
    </div>
    @endif
@stop
