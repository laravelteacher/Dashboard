<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>make first Dashboard in Laravel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="SimpleAdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/fonts-icons/font-awesome.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/fonts-icons/ionicons.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
   <div class="login-box">
      <div class="login-box-body">
         <main class="py-4">
            @yield('content')
         </main>
      </div>
   </div>
   <script src="SimpleAdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="SimpleAdminLTE/bootstrap/js/bootstrap.min.js"></script>
   <script src="SimpleAdminLTE/plugins/iCheck/icheck.min.js"></script>
   <script>
     $(function () {
       $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
     });
  </script>
</body>
</html>