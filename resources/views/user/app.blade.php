<!DOCTYPE html>
<html lang="en">

<head>
    @include('user/layouts/head')
</head>

<body>

   @include('user/layouts/header')
        @section('main-content')
            @show

  @include('user/layouts/footer')
  @include('cookieConsent::index')
</body>

</html>
