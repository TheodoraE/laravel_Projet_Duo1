<section class="container">
    <form action="/add_linkHeader" method="POST">
        <div class="form-group">
          @csrf

          {{-- Name --}}
          <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name">
          </div>

          {{-- Route --}}
          <div class="form-group">
            <label for="">Route : </label>
            <input type="text" name="route">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>