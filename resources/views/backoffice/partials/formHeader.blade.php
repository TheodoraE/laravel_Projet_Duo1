<section class="container">
    <form action="/add_link" method="POST">
        <div class="form-group">
          @csrf

          {{-- Name --}}
          <label for="">Name : 
            <input type="text" name="name">
          </label> <br>

          {{-- Route --}}
          <label for="">Route : 
            <input type="text" name="route">
          </label> <br>

          {{-- Created_at --}}
          <label for="">Created at : 
            <input type="text" name="created_at">
          </label> <br>

          {{-- Updated_at --}}
          <label for="">Updated at : 
            <input type="text" name="updated_at">
          </label>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>