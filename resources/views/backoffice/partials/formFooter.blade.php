<section class="container">
    <form action="/add_linkFooter" method="POST">
        <div class="form-group">
          @csrf

          {{-- Name --}}
          <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name">
          </div>

          {{-- Class --}}
          <div class="form-group">
            <label for="">Class : </label>
            <input type="text" name="class">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>