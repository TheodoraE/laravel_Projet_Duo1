<section class="container">
    <form action="/add_linkHome2" method="POST">
        <div class="form-group">
          @csrf

          {{-- Icon --}}
          <div class="form-group">
            <label for="">Icon : </label>
            <input type="text" name="icon">
          </div>

          {{-- Link --}}
          <div class="form-group">
            <label for="">Link : </label>
            <input type="text" name="link">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>