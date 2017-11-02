<table class="table table-responsive" id="apples-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Msg</th>
        <th>Help</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($apples as $apple)
        <tr>
            <td>{!! $apple->title !!}</td>
            <td>{!! $apple->msg !!}</td>
            <td>{!! $apple->help !!}</td>
            <td>
                {!! Form::open(['route' => ['apples.destroy', $apple->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('apples.show', [$apple->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('apples.edit', [$apple->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>