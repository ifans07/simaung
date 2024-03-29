<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimaUng</title>
    <meta name="description" content="The small framework with powerful features">

    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <!-- jquery -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js'></script>
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body data-bs-theme="">
    <div class="animate-bg"></div>
    <div class="animate-bg1"></div>
    <?= $this->include('templates/header') ?>

    <main id="main">
        <section id="hero" class="hero">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h2>Simaung</h2>
                        <h3>Codeigniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h3>
                        <p>Mari kelola uang dengan teratur untuk masa depan yang cemerlang</p>
                    </div>
                </div>
            </div>
        </section>

        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('templates/footer') ?>

    <!-- SCRIPTS -->
    <script src="<?= base_url('js/script.js') ?>"></script>
    <!-- <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script> -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.js') ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }

        // tooltip
        const tooltipTrigger = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTrigger].map(tooltipTriggerEl => new bootstrap.Tooltip(
            tooltipTriggerEl))
    })
    </script>
</body>

</html>