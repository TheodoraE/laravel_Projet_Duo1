@extends('template.second')

@section('content')

    <section class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

            <h6>{{$show->id}}</h6>

            {{-- Cards(title) --}}
            <h5 class="card-title">{{$show->title}}</h5>

            {{-- Cards(num) --}}
            <h6 class="card-subtitle mb-2 text-muted">{{$show->num}}</h6>

            {{-- Cards --}}
            <h4 class="card-text">{{$show->lorem}}</h4>

            {{-- Cards --}}
            <p>{{$show->p}}</p>
            
            <span>{{$show->created_at}}</span> <br>
            <span>{{$show->updated_at}}</span>
            </div>
            <div class="row d-flex justify-content-around">
                {{-- <a href="/edit-linkArticle/{{$show->id}}" class="btn btn-warning">EDIT</a> --}}
                <a class="btn btn-primary" href="/backoffice">Go back</a>
            </div>
        </div>

    </section>
@endsection