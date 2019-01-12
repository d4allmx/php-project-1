<div class="container" id="register">
  <div class="row center-block">
    <h1>give us good news</h1>
  </div>
  <form action="/inc/news/news-register.inc.php" method="POST" enctype="multipart/form-data">
    <p>Write a title:</p>
    <input type="text" name="title" id=""><br>
    <p>Tell us more about that:</p>
    <textarea name="body" id="" cols="30" rows="10" maxlength="300"></textarea> <br>
    <p>upload an image:</p>
    <input type="file" name="image" id=""><br><br>
    <input id="button-reg" type="submit" value="register">
  </form>
</div>
