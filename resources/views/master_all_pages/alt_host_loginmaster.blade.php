<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    @stack('meta_style')
    <title>Host Login</title>
  </head>
  <body style="background:#344156">
   @yield('alt_host_login')
   @stack('footer_master')
   @stack('js')
  </body>
</html>
