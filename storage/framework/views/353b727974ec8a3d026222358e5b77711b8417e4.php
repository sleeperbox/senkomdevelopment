<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('public/admin/img/apple-icon.png')); ?>">
  <link href="<?php echo e(url('public/admin/img/logo.png')); ?>" rel="icon">
  <title>Admin Senkom</title>
  

  <!-- Bootstrap core CSS     -->
  <link href="<?php echo e(url('public/admin/css/bootstrap.min.css')); ?>" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="<?php echo e(url('public/admin/css/animate.min.css')); ?>" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="<?php echo e(url('public/admin/css/paper-dashboard.css')); ?>" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <!-- <link href="<?php echo e(url('public/admin/css/demo.css')); ?>" rel="stylesheet" /> -->

  <!--  Fonts and icons     -->
  <link href="<?php echo e(url('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('https://fonts.googleapis.com/css?family=Roboto:400,300')); ?>" rel='stylesheet' type='text/css'>
  <link href="<?php echo e(url('public/admin/css/themify-icons.css')); ?>" rel="stylesheet">

 
    <!-- References: https://github.com/fancyapps/fancyBox -->
  <link rel="stylesheet" href="<?php echo e(URL('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')); ?>" media="screen">
  <script src="<?php echo e(URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(URL('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')); ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

   <!--   Core JS Files   -->
  <script src="<?php echo e(url('public/admin/js/jquery.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('public/admin/js/bootstrap.min.js')); ?>" type="text/javascript"></script>

  <!--  Checkbox, Radio & Switch Plugins -->
  <script src="<?php echo e(url('public/admin/js/bootstrap-checkbox-radio.js')); ?>"></script>

  <!--  Charts Plugin -->
  <script src="<?php echo e(url('public/admin/js/chartist.min.js')); ?>"></script>

  <!--  Notifications Plugin    -->
  <script src="<?php echo e(url('public/admin/js/bootstrap-notify.js')); ?>"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="<?php echo e(url('https://maps.googleapis.com/maps/api/js')); ?>"></script>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
  <script src="<?php echo e(url('public/admin/js/paper-dashboard.js')); ?>"></script>

  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
 <!--  <script src="<?php echo e(url('public/admin/js/demo.js')); ?>"></script> -->

  <script type="text/javascript">
    $(document).ready(function(){

      demo.initChartist();
        $.notify({
          icon: 'ti-gift',
            message: "Senkom Polri Dashboard"
            },{
              type: 'success',
              timer: 4000
            });
      });
  </script>
  <style type="text/css">
    body {
    font-family: 'Roboto', sans-serif;
}
  </style>

</head>

