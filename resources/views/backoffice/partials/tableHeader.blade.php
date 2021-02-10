<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Route</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($headerLinks as $link)
            <tr>
              <th scope="row">{{$link->id}}</th>
              <td>{{$link->name}}</td>
              <td>{{$link->route}}</td>   
              <td>{{$link->created_at}}</td>
              <td>{{$link->updated_at}}</td>
              <td>
                <form action="/delete-linkHeader/{{$link->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>             
            </tr>
          @endforeach
        </tbody>
    </table>
</section>