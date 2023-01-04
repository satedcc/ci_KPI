<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url() ?>dir/images/favicon.png">
    <!-- Page Title  -->
    <title>Reset Passcode | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url() ?>dir/assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="<?= base_url() ?>dir/assets/css/theme.css?ver=3.1.1">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="<?= base_url() ?>dir/images/logo.png" srcset="<?= base_url() ?>dir/images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="<?= base_url() ?>dir/images/logo-dark.png" srcset="<?= base_url() ?>dir/images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">OTP Kode</h5>
                                        <div class="nk-block-des">
                                            <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="alert alert-success mt-3" role="alert">Silahkan masukkan kode OTP yang telah dikirim melalu email anda</div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="<?= base_url('forget/otproses') ?>" method="POST">
                                    <input type="hidden" name="email" value="<?= $this->session->flashdata('email'); ?>">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Masukkan Kode OTP</label>
                                        </div>
                                        <div class="form-control-wrap otp">
                                            <input type="text" name="kode_1" class="form-control form-control-lg" id="default-01" autofocus>
                                            <input type="text" name="kode_2" class="form-control form-control-lg" id="default-01">
                                            <input type="text" name="kode_3" class="form-control form-control-lg" id="default-01">
                                            <input type="text" name="kode_4" class="form-control form-control-lg" id="default-01">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-5">
                                    <a href="<?= base_url() ?>"><strong>Return to login</strong></a>
                                </div>
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2022 DashLite. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img">
                                        <img class="round" src="<?= base_url() ?>dir/images/slides/promo-a.png" srcset="<?= base_url() ?>dir/images/slides/promo-a2x.png 2x" alt="">
                                    </div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?= base_url() ?>dir/assets/js/bundle.js?ver=3.1.1"></script>
    <script src="<?= base_url() ?>dir/assets/js/scripts.js?ver=3.1.1"></script>


</html>