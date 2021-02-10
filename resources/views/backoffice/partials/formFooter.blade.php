<section class="container">
    <form action="/add_linkFooter" method="POST">
        <div class="form-group">
          @csrf

          {{-- Name --}}
          <label for="">Name : 
            <input type="text" name="name">
          </label> <br>

          {{-- Class --}}
          <label for="">Class : 
            <input type="text" name="class">
          </label> <br>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>