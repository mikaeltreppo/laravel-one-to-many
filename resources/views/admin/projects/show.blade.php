@extends('layouts.admin')

@section('content')

<div class="container d-flex justify-content-center">
<!--card di un progetto in show-->
    <div class="card mt-4" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">{{$project->title}}</h5>
          <p class="card-text">{{$project->description}}</p>
        <!--  <p class="card-text">7\\$project->type->title}}</p>-->
          <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna ai Progetti</a>
        </div>
      </div>



<h1></h1>

</div>

@endsection