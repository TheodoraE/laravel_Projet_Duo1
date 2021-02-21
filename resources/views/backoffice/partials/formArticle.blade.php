<section class="container">
    <form action="/add_linkArticle" method="POST">
        <div class="form-group">
          @csrf

          {{-- Title --}}
          <div class="form-group">
            <label for="">Title : </label>
            <input type="text" name="title">
          </div>

          {{-- Num --}}
          <div class="form-group">
            <label for="">Num : </label>
            <input type="text" name="num">
          </div>

          {{-- Lorem --}}
          <div class="form-group">
            <label for="">Lorem : </label>
            <input type="text" name="lorem">
          </div>

          {{-- P --}}
          <div class="form-group">
            <label for="">P : </label>
            <input type="text" name="p">
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>