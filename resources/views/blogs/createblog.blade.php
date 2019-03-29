<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<div class="container">
<form action="{{url('/posts')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="content">content</label>
    <textarea  class="form-control" name="content"></textarea>
  </div>
  <div class="form-group">
    <input type="file" class="form-contrl" name="images">
  </div>
  <button type="submit" class="btn btn-default">add post</button>
</form>
</div>