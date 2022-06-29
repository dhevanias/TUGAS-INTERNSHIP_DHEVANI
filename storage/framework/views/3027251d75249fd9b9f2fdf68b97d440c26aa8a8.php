

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('Partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<header>
        <div class="container">
            <div class="row align-items-center" style="height: 100vh;">
                <div class="col">
                    <h4 class="color-green-light">Hi Everyone, I am</h4>
                    <h1>Dhevani Dafa</h1>
                    <p class="mt-3 font-sans">I am a final student at Dinamika University. I have high interest about Web Developer. I hope with do an intership at Kasir Pintar I can be a professional Web Developer</p>
                </div><!-- col -->
                <div class="col">
                    
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </header>

    <div id="section-about" class="section-about" >
        <div class="container">
            <h2 class="color-green-2 fw-bold text-center mt-5">Organization Experience</h2>
            <p class="font-sans color-green-light text-center">My organization experience at Universitas Dinamika</p>

            <div class="row mt-5 d-flex justify-content-evenly">
                <div class="card p-0" style="width: 18rem;">
                    <img src="img/jdg.jpg">
                    <div class="card-body">
                        <p class="card-title fw-semibold text-dark font-sans text-xl h-50">Java Developer Group</p>
                        <p class="card-text font-sans opacity-75 mt-3 mb-0">Treasurer</p>
                        <p class="font-sans opacity-75 p-0 m-0 text-tahun">2019 - 2020</p>
                    </div>
                </div><!--card 1-->
                <div class="card p-0" style="width: 18rem;">
                    <img src="img/hima.jpg">
                    <div class="card-body">
                        <p class="card-title fw-semibold text-dark font-sans text-xl h-50">Himpunan Mahasiswa D3 Sistem Informasi</p>
                        <p class="card-text font-sans opacity-75 mt-3 mb-0">Media Communication</p>
                        <p class="font-sans opacity-75 p-0 m-0 text-tahun">2020 - 2021</p>
                    </div>
                </div><!--card 2-->
                <div class="card p-0" style="width: 18rem;">
                    <img src="img/okk.jpg">
                    <div class="card-body">
                        <p class="card-title fw-semibold text-dark font-sans text-xl h-50">Orientasi Kehidupan Kampus</p>
                        <p class="card-text font-sans opacity-75 mt-3 mb-0 text-sm">Fasilitator</p>
                        <p class="font-sans opacity-75 p-0 m-0 text-tahun">2020</p>
                    </div>
                </div><!--card 3-->
            </div><!-- row -->

        </div><!-- container -->
    </div><!-- section-blog -->

    <div class="section-timerlife" id="section-timerlife">
        <div class="container">
            <h1 class="color-green fw-bold mt-4">Timer Life</h1>
            <p class="font-sans opacity-75">I was born on 20 July 2001</p>
            <div class="countdown">
                <div class="container-day">
                    <h3 class="year">Year</h3>
                    <h3 class="font-sans text-sm">Year</h3>
                </div>
                
                <div class="container-hour">
                    <h3 class="month">Month</h3>
                    <h3 class="font-sans text-sm">Month</h3>
                </div>

                <div class="container-minute">
                    <h3 class="day">Day</h3>
                    <h3 class="font-sans text-sm">Day</h3>
                </div>

                <div class="container-minute">
                    <h3 class="hour">Hour</h3>
                    <h3 class="font-sans text-sm">Hour</h3>
                </div>

                <div class="container-minute">
                    <h3 class="minute">Minute</h3>
                    <h3 class="font-sans text-sm">Minute</h3>
                </div>

                <div class="container-minute">
                    <h3 class="second">Second</h3>
                    <h3 class="font-sans text-sm">Second</h3>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('Partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('Layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Kasir Pintar\TUGAS-INTERNSHIP_DHEVANI\resources\views/main.blade.php ENDPATH**/ ?>