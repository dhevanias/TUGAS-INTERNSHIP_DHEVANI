<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Kasir Pintar</title>

    <!-- icon -->
    <link rel="icon" type="image/png" href="img/blush.png">

    <!-- css bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- my css -->
    <link rel="stylesheet" href="css/my-css.css">

    <!-- bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body class="body-main">

    <?php echo $__env->make('Partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('Partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- js bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Kasir Pintar\TUGAS-INTERNSHIP_DHEVANI\resources\views/Layout/main.blade.php ENDPATH**/ ?>