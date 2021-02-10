<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icon</th>
            <th scope="col">Link</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($home1Links as $link)
            <tr>
              <th scope="row">{{$link->id}}</th>
              <td>{{$link->icon}}</td>
              <td>{{$link->link}}</td>   
              <td>{{$link->created_at}}</td>
<<<<<<< HEAD
              <td>{{$link->updated_at}}</td>  
              <td>
              <form action="/footer-delete/{{$footer->id}}" method="post">
              <button type="submit" class="btn btn-danger">DELETE</button>
              
              <form action="/article-delete/{{$footer->id}}" method="post">
              <button type="submit" class="btn btn-danger">DELETE</button>
              </td> 
                        
=======
              <td>{{$link->updated_at}}</td>
              <td>
                <form action="/delete-linkHome1/{{$link->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>             
>>>>>>> 6de61b697962f3dec087f92e62f718e8920974b1
            </tr>
          @endforeach
        </tbody>
    </table>
</section>