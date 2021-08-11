<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="<?= base_url('assets/user/') ?>https: //use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous">
    </script>
    <!-- Google fonts-->
    <link href="<?= base_url('assets/user/') ?>https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/user/') ?>https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/user/') ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Yosef Andrian Kristiadi</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/user/img/foto1.jpg') ?>"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/index">HOME</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/profile">ABOUT ME</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/education">EDUCATION</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/pekerjaan">EXPERIENCE</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/skill">SKILL</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>user/kontak">CONTACT</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <!-- Profile-->
    <section class="resume-section" id="education">
        <div class="resume-secion-content">
            <h3 class="mb-5">Kontak</h3>
            <?php foreach ($list_kontak as $list) : ?>
                <div class="d-flex" data-id="<?= $list['kontak_id'] ?>">
                    <div class="d-flex flex column flex-md-row justify-content-between-mb-4">
                        <div class="flex-grow-1">
                            <h4 class="mb-0">Nomor Telepon</h4>
                            <div class="subheading mb-3"><?= $list['no_tlp'] ?> </div>
                            <h4 class="mb-0">Email</h4>
                            <div class="subheading mb-3"><?= $list['email'] ?> </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="<?= base_url('assets/user/') ?>https: //cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/user/') ?>js/scripts.js"></script>
</body>

</html>