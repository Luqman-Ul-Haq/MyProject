<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <h3> Insert Your Record </h3>
    <a href="/" class="btn btn-info"> Back  </a>
    <form class="row col-6" method="POST">
        @csrf
        <div class="form-outline mb-4 col-6">
            <label class="form-label" for="form1Example1">Your Name</label>
            <input type="text" id="form1Example1" name="Name" class="form-control" />
            <p style="color: red"> @error('Name') {{$message}} @enderror </p>
        </div>
        <div class="form-outline mb-4 col-6">
            <label class="form-label" for="form1Example1">Your Email</label>
            <input type="text" id="form1Example1" name="Email"  class="form-control" />
            <p style="color: red"> @error('Email') {{$message}} @enderror </p>
        </div>
        <div class="form-outline mb-4 col-6">
            <label class="form-label" for="form1Example1">Your Phone</label>
            <input type="text" id="form1Example1" name="Phone"  class="form-control" />
            <p style="color: red"> @error('Phone') {{$message}} @enderror </p>
        </div>
        <div class="form-outline mb-4 col-6">
            <label class="form-label" for="form1Example1">Your City</label>
            <input type="text" id="form1Example1"  name="City" class="form-control" />
            <p style="color: red"> @error('City') {{$message}} @enderror </p>
        </div>
        <button type="submit" class="btn btn-info col-12"> Submit </button>
      </form>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>