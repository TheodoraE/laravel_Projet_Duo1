<section class="container">
    <form action="/update-linkFooter/{{$edit->id}}" method="POST">
      @csrf
        <div class="form-group">

          {{-- Name --}}
          <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name" value="{{$edit->name}}">
          </div>

          {{-- Class --}}
          <div class="form-group">
            <label for="">Class : </label>
            <input type="text" name="class" value="{{$edit->class}}">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>