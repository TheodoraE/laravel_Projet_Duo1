<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($footerIcons as $icon)
            <tr>
              <th scope="row">{{$icon->id}}</th>
              <td>{{$icon->name}}</td>
              <td>{{$icon->class}}</td>   
              <td>{{$icon->created_at}}</td>
              <td>{{$icon->updated_at}}</td>
              <td>
                <form action="/delete-linkFooter/{{$icon->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>              
            </tr>
          @endforeach
        </tbody>
    </table>
</section>