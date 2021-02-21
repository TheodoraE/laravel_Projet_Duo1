@extends('template.second')

@section('content')

    <section class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

            <h6>{{$show->id}}</h6>

            {{-- Home1 (icon) --}}
            <h5 class="card-title">{{$show->icon}}</h5>

            {{-- Home1(link) --}}
            <h6 class="card-subtitle mb-2 text-muted">{{$show->link}}</h6>
            
            <span>{{$show->created_at}}</span> <br>
            <span>{{$show->updated_at}}</span>
            </div>
            <div class="row d-flex justify-content-around">
                <a href="/edit-linkHome1/{{$show->id}}" class="btn btn-warning">EDIT</a>
                <a class="btn btn-primary" href="/backoffice">Go back</a>
            </div>
        </div>

    </section>
@endsection