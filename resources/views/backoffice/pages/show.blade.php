<section class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h6>{{$show->id}}</h6>
          <h5 class="card-title">{{$show->title}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->num}}</h6>
          <h4 class="card-text">{{$show->lorem}}</h4>
          <p>{{$show->p}}</p>
          <span>{{$show->created_at}}</span>
          <span>{{$show->updated_at}}</span>
        </div>
    </div>
</section>
