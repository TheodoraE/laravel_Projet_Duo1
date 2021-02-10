<section class="container">
    <form action="/add_linkArticle" method="POST">
        <div class="form-group">
          @csrf

          {{-- Title --}}
          <label for="">Title : 
            <input type="text" name="title">
          </label> <br>

          {{-- Num --}}
          <label for="">Num : 
            <input type="text" name="num">
          </label> <br>

          {{-- Lorem --}}
          <label for="">Lorem : 
            <input type="text" name="lorem">
          </label> <br>

          {{-- P --}}
          <label for="">P : 
            <input type="text" name="p">
          </label> <br>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>