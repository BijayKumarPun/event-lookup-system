<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @stack('meta_style')
    @yield('nav_left')
    <title>User</title>
    <style>
      .navbar-fixed-left{
        margin-top:60px;
      }
    </style>
  </head>
    <body style="background:#344156;">
      @stack('master_nav_section')
      @stack('host_login')
      @stack('user_login')
      @stack('host_register')
      @stack('user_register')

      @yield('user')
      @stack('js')
  </body>
</html>
