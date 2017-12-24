<table class="table table-responsive" id="movies-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Url</th>
        <th>Author</th>
        <th>Memo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>{!! $movie->name !!}</td>
            <td>{!! $movie->url !!}</td>
            <td>{!! $movie->author !!}</td>
            <td>{!! $movie->memo !!}</td>
            <td>
                {!! Form::open(['route' => ['movies.destroy', $movie->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('movies.show', [$movie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('movies.edit', [$movie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>