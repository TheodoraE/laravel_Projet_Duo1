@extends('template.second')

@section('content')

    <section class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

            <h6>{{$show->id}}</h6>

            {{-- Header(name) --}}
            <h5 class="card-title">{{$show->name}}</h5>

            {{-- Header(route) --}}
            <h6 class="card-subtitle mb-2 text-muted">{{$show->route}}</h6>
            
            <span>{{$show->created_at}}</span> <br>
            <span>{{$show->updated_at}}</span>
            </div>
            <div class="row d-flex justify-content-around">
                <a href="/edit-linkHeader/{{$show->id}}" class="btn btn-warning">EDIT</a>
                <a class="btn btn-primary" href="/backoffice">Go back</a>
            </div>
        </div>

    </section>
@endsection
