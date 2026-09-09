<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Admin Dashboard'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!-- Vendor CSS -->
    <link href="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/admin/layout/header.blade.php ENDPATH**/ ?>