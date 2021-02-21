<section class="container">
    <form action="/update-linkHeader/{{$edit->id}}" method="POST">
      @csrf
        <div class="form-group">

          {{-- Name --}}
          <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name" value="{{$edit->name}}">
          </div>

          {{-- Route --}}
          <div class="form-group">
            <label for="">Route : </label>
            <input type="text" name="route" value="{{$edit->route}}">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>