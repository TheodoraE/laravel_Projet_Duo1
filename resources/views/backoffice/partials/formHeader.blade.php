<section class="container">
    <form action="/add_linkHeader" method="POST">
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

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>