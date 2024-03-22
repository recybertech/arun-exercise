<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Center align the heading */
        .center-heading {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        /* Center align the form */
        .center-form {
            display: flex;
            justify-content: center;
        }
    </style>
    @yield('custom-style')
</head>
  <body>
    @if(session('success'))
    <div class="row justify-content-end align-items-center error-field">
        <div class="col-3  alert alert-success">
             <p>{{ session('success') }}!!</p>
        </div>
    </div>
    @endif
    @if(session('error'))
    <div class="row justify-content-end align-items-center error-field">
        <div class="col-3  alert alert-danger">
        <p>{{ session('error') }}</p>
        </div>
    </div>
    @endif
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
