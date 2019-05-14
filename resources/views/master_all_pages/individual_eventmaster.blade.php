<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
      @stack('meta_style')

    <title></title>
  </head>
  <body  style="background:#344156">
    @stack('master_nav_section')
    @stack('host_login')
    @stack('user_login')
    @stack('host_register')
    @stack('user_register')

    @yield('event')
    @stack('footer_master')
    @stack('js')

  </body>
</html>
