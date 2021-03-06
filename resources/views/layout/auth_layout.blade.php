<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Laravel App | @yield('title') Page</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css"> -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="{{asset('/plugins/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-5">

            <div class="login-brand">
              <img src="{{asset('/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            @yield('content')

          </div>
        </div>
      </div>
    </section>
  </div>

  @include('sweetalert::alert')
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{asset('/plugins/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('/js/scripts.js')}}"></script>
  <script src="{{asset('/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="{{asset('/js/page/forms-advanced-forms.js')}}"></script>
  <script>

  </script>
</body>

</html>