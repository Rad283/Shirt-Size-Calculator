<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('https://fonts.googleapis.com/css?family=Lato:300,400,700') }}">
    <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/untitled-1.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/untitled-2.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/untitled-3.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/untitled.css') }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-light navbar-expand-md d-flex d-lg-flex align-items-center align-content-center align-items-lg-center portfolio-navbart bg-dark text-light" style="filter: saturate(107%);">
      <div class="container-fluid">
          <div class="align-items-center align-content-center align-self-center">
              <h1>Shirt-Size Calculator</h1>
          </div>
      </div>
  </nav>
        {{ $slot }}
        <footer class="page-footer mt-auto bg-dark text-light">
            <div class="container">
                <div class="links text-light"><a class="text-light" href="#">Made By: Kelompok 5</a></div>
                <div><a  href="#"><img width="24" height="24" src="{{ asset('github.png') }}"></a><span>&nbsp;Github</span></div>
            </div>
          </footer>
          <script src="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"></script>
          <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js') }}"></script>
          <script src="{{ asset ('assets/js/theme.js') }} "></script>
</body> 
          
</html>