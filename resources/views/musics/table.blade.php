<table class="table table-responsive" id="musics-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Desc</th>
        <th>Author</th>
        <th>Url</th>
        <th>Size</th>
        <th>Creator</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($musics as $music)
        <tr>
            <td>{!! $music->name !!}</td>
            <td>{!! $music->desc !!}</td>
            <td>{!! $music->author !!}</td>
            <td>{!! $music->url !!}</td>
            <td>{!! $music->size !!}</td>
            <td>{!! $music->creator !!}</td>
            <td>
                {!! Form::open(['route' => ['musics.destroy', $music->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('musics.show', [$music->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('musics.edit', [$music->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>