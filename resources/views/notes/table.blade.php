<table class="table table-responsive" id="notes-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Content</th>
        <th>Auth</th>
        <th>Link</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr>
            <td>{!! $note->title !!}</td>
            <td>{!! $note->content !!}</td>
            <td>{!! $note->auth !!}</td>
            <td><a target="_blank" href="{!! $note->link !!}">{!! $note->link !!}</a></td>
            <td>
                {!! Form::open(['route' => ['notes.destroy', $note->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('notes.show', [$note->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('notes.edit', [$note->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>