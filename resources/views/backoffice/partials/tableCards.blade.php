<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            {{-- <th scope="col">Num</th>
            <th scope="col">Lorem</th>
            <th scope="col">P</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th> --}}
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articleData as $link)
            <tr>
              <th scope="row">{{$link->id}}</th>
              <td>{{$link->title}}</td>
              {{-- <td>{{$link->num}}</td> 
              <td>{{$link->lorem}}</td>   
              <td>{{$link->p}}</td>     
              <td>{{$link->created_at}}</td>
              <td>{{$link->updated_at}}</td> --}}
              <td>
                <a class="btn btn-primary" href="/show-linkCard/{{$link->id}}">SHOW</a>
              </td>
              <td>
                <form action="/delete-linkArticle/{{$link->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>              
            </tr>
          @endforeach
        </tbody>
    </table>
</section>