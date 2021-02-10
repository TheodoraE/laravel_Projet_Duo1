<section class="container">
    <form action="/add_linkHome1" method="POST">
        <div class="form-group">
          @csrf

          {{-- Icon --}}
          <label for="">Icon : 
            <input type="text" name="icon">
          </label> <br>

          {{-- Link --}}
          <label for="">Link : 
            <input type="text" name="link">
          </label> <br>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>