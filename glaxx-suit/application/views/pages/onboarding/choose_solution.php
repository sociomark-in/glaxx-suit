<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_common_head'); ?>
    <title>Choose Solution</title>
</head>

<body class="">
    <header>
        <?php $this->load->view('components/_inactive_nav'); ?>
    </header>
    <div class="modal" id="solutionModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row m-0 g-0 justify-content-center align-items-center h-100">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                            <div class="text-center">
                                <img class="" src="<?= base_url('assets/media/brand_assets/') ?>glaxx_icon.svg" alt="" height="80">
                                <h1>Welcome to <span class="text-primary">Glaxx.</span></h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam maxime dicta itaque laborum saepe tenetur cum molestias alias iste, magni dolorem eius pariatur commodi? Quibusdam perspiciatis illo id ducimus libero.
                                </p>
                                <img class="my-4" src="<?= base_url('assets/media/brand_assets/') ?>glaxx_icon.svg" alt="" height="150">
                                <div class="">
                                    <button type="button" class="btn btn-lg btn-primary text-white icon-right" data-bs-dismiss="modal">
                                        Next<i class="fa-solid fa-arrow-right icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="choose_Solution">
        <div class="container">
            <div class="apge-title">
                <h2>Choose a starting solution</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ducimus nulla quibusdam, obcaecati modi sit atque quasi laborum sequi maxime.
                </p>
            </div>
            <form action="<?= base_url('api/onboarding/solution') ?>" method="post">
                <div class="form-wrapper mb-3">
                    <div class="row m-0">
                        <?php for ($i = 0; $i < 12; $i++) : ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
                                <label for="Solution0<?= $i ?>" class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="mb-4">Lorem, ipsum dolor.</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, consequatur.</p>
                                            <input type="radio" name="solution" id="Solution0<?= $i ?>">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-lg btn-primary icon-right text-white">Continue<i class="fa-solid fa-arrow-right icon"></i></button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // jQuery.noConflict(); 
        $(document).ready(() => {
            $('#solutionModal').modal('show');
        })
    </script>
</body>

</html>