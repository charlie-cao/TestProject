@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Music
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($music, ['route' => ['musics.update', $music->id], 'method' => 'patch']) !!}

                        @include('musics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection