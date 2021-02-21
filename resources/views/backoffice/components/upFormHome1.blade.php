<section class="container">
    <form action="/update-linkHome1/{{$edit->id}}" method="POST">
        <div class="form-group">
          @csrf

          {{-- Icon --}}
          <div class="form-group">
            <label for="">Icon : </label>
            <input type="text" name="icon" value="{{$edit->icon}}">
          </div>

          {{-- Link --}}
          <div class="form-group">
            <label for="">Link : </label>
            <input type="text" name="link" value="{{$edit->link}}">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>