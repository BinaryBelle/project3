<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
            <li><a href="<?php echo e(route('thanks',['name' => 'IS601' ])); ?>">Thanks</a></li>
        </ul>
    </div>
</nav>