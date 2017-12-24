<li class="{{ Request::is('musics*') ? 'active' : '' }}">
    <a href="{!! route('musics.index') !!}"><i class="fa fa-edit"></i><span>Musics</span></a>
</li>

<li class="{{ Request::is('movies*') ? 'active' : '' }}">
    <a href="{!! route('movies.index') !!}"><i class="fa fa-edit"></i><span>Movies</span></a>
</li>

