@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method' => 'patch']) !!}

                        @include('movies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection