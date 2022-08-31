<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Deuwi Satriya Irawan">
  <meta name="webgis umkm laundry" content="webgis umkm laundry using bootstrap and jquery leaflet">
  <title>{{ env('APP_NAME') }}</title>
  <!-- Bootstrap CSS -->
  <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Leaflet JS -->
  <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script type="text/javascript" src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
  <script type="text/javascript" src="{{ asset('leaflet/leaflet.js') }}"></script>
  <!-- Leaflet Search -->
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet-search/dist/leaflet-search.min.css') }}">
  <script type="text/javascript" src="{{ asset('leaflet-search/dist/leaflet-search.min.js') }}"></script>
  <!-- jQuery -->
  <!--
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('jQuery/jquery-3.6.0.js') }}"></script>
    -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>
  <!-- Style for yajra datatable-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/r-2.3.0/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}">
  <!-- Leaflet Routing Machine -->
  <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
  <script type="text/javascript" src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.css') }}" />
  <!--link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" /-->
  <script type="text/javascript" src="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.js') }}"></script>
  <script type="text/javascript" src="{{ asset('leaflet-routing-machine/examples/Control.Geocoder.js') }}"></script>
  <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="{{ asset('trix-editor/trix.css') }}">
  <script type="text/javascript" src="{{ asset('trix-editor/trix.js') }}"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }

  </style>
  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

  </script>
  <!-- Custom styles for this template -->
  <link href="{{ asset('bootstrap/sign-in/signin.css') }}" rel="stylesheet">
</head>
<body>

  <style>
    .navbar-nav .nav-link.active {
      color: #353;
    }

    .navbar-nav .nav-link:hover {
      color: #353;
    }

    .navbar-brand:hover {
      color: #353;
    }

  </style>
  <!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        @guest
        <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
        @endguest
        @auth
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-lg-auto">
            @guest
            <a class="nav-link nav-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i data-feather="log-in"></i> Sign In</a>
            <a class="nav-link nav-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}"><i data-feather="user-plus"></i> Sign Up</a>
            @endguest
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="container container-fluid">
    @yield('content')
  </div>

  <div class="container container-fluid">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-bottom">
      <div class="col-md-4 d-flex align-items-center">
        <a href="{{ route('home') }}" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <i data-feather="home"></i>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 {{ env('APP_NAME') }} Team, Inc</span>

      </div>
    </footer>
  </div>

  <!-- Bootstrap JS-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Bootstrap Min JS-->
  <!--
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  -->
  <!-- Feather Icon -->
  <!-- <script type="text/javascript" src="https://unpkg.com/feather-icons"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script type="text/javascript" src="{{ asset('feather/feather.min.js') }}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
  <!-- Script for yajra datatable-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/r-2.3.0/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"></script>
  <script type="text/javascript" src="{{ asset('datatable/pdfmake.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('datatable/vfs_fonts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('datatable/datatables.min.js') }}"></script>

  <script type="text/javascript">
    feather.replace()

    $(document).ready(function() {
      $('#myTable').DataTable({
        responsive: true
      , });
    });

  </script>
  <!-- Feather Icon -->
  <!-- <script src="https://unpkg.com/feather-icons"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script src="{{ asset('feather/feather.min.js') }}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
  <script>
    feather.replace()

  </script>
</body>
</html>
