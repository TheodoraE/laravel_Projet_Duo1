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
          @foreach ($home2Links as $link)
            <tr>
              <th scope="row">{{$link->id}}</th>
              <td>{{$link->icon}}</td>
              <td>{{$link->link}}</td>   
              <td>{{$link->created_at}}</td>
              <td>{{$link->updated_at}}</td>
              <td>
                <form action="/delete-linkHome2/{{$link->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>             
            </tr>
          @endforeach
        </tbody>
    </table>
</section>