<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('components/_common_head'); ?>
    <title>Sign Up</title>
</head>

<body class="">
    <header>
        <?php echo view('components/_inactive_nav'); ?>
    </header>
    <main>
        <div class="row g-0 m-0 justify-content-center">
            <div class="col-xxl-9 col-xl-10 col-lg-11 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-lg-6 col-12 bg-secondary">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <img src="<?= base_url('assets/media/brand_assets/') ?>glaxx_icon.svg" alt="" height="180">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="row g-0 m-0 justify-content-center">
                                    <div class="col-xl-9 col-lg-10 col-11">
                                        <div class="box mt-3 mb-4">
                                            <div class="title text-center">
                                                <img src="<?= base_url('assets/media/brand_assets/') ?>glaxx_icon.svg" alt="" height="80">
                                                <p class="m-0">Create Your</p>
                                                <h4>Glaxx Account</h4>
                                            </div>
                                            <div class="form-wrapper">
                                                <form action="<?= base_url('api/onboarding') ?>" method="post">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="">Company Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label" for="">Company Email Address</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label" for="">Portal Name</label>
                                                        <input type="text" name="portal_name" class="form-control">
                                                        <span class="form-text">( https://portalurl.com/portal-name )</span>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label" for="">Phone Number</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="">Industry Type</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Select Industry Type</option>
                                                            <option value="information_technology_and_services">Information Technology and Services</option>

                                                            <option value="marketing_and_advertising">Marketing and Advertising</option>

                                                            <option value="consumer_services">Consumer Services</option>

                                                            <option value="management_consulting">Management Consulting</option>

                                                            <option value="retail">Retail</option>

                                                            <option value="financial_services">Financial Services</option>

                                                            <option value="real_estate">Real Estate</option>

                                                            <option value="computer_software">Computer Software</option>

                                                            <option value="educational_management">Educational Management</option>

                                                            <option value="manufacturing_and_distribution">Manufacturing and Distribution</option>

                                                            <option value="hospitality">Hospitality</option>

                                                            <option value="legal_firms">Legal Firms</option>

                                                            <option value="government_firms">Government Firms</option>

                                                            <option value="media_and_publication">Media and Publication</option>

                                                            <option value="non_profit_organization">Non Profit Organization</option>

                                                            <option value="building_and_construction">Buildings and Construction</option>

                                                            <option value="healthcare_services">Healthcare Services</option>
                                                        </select>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">
                                                            Sign&nbsp;Up
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>