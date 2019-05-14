<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    @stack('meta_style')
    <title>User Register</title>
  </head>
  <body style="background:#344156">
   @yield('alt_user_register')
   @stack('footer_master')
   @stack('js')
  </body>
</html>
