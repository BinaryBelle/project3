<!doctype html>
<html class="no-js" lang="<?php echo e(app()->getLocale()); ?>">
<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition skin-blue sidebar-mini">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="content-wrapper">

    <!-- Add your site or application content here -->
    <header>
        <?php echo $__env->make('includes.mainNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <!-- Content Header (Page header) -->
    <?php echo $__env->yieldContent('content'); ?>


    <footer class="main-footer">
        <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
