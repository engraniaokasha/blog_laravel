<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">blog task</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('posts')}}"><span class="nav navbar-nav navbar-left"></span>home</a></li>
    </ul>
  </div>
</nav>



<div class="container">
<div class="card">

  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <img src="{{asset($post->image)}}" width="100" height="100">
    <p class="card-text">{{$post->content}}</p>
    <a href="{{url('posts') }}"  class="btn btn-warning">back</a>
    <a href="{{url('posts/edit',['post'=>$post->id])}}" class="btn btn-primary">edit</a><br><br>
      <form action="{{url('posts',['post'=>$post->id])}}" method="POST">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger">delete</button>
      </form>
  </div>
</div>
</div>
