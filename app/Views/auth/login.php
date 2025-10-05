<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spike Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('spike/src/assets/images/logos/favicon.png'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('spike/src/assets/css/styles.min.css'); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="<?= site_url('/') ?>" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?php echo base_url('spike/src/assets/images/logos/logo.svg'); ?>" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form method="post" action="<?= base_url('auth/login') ?>">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remember this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="<?= site_url('auth/forgot_password') ?>">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Login</button>
                   <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Spike?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= site_url('auth/register') ?>">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('spike/src/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('spike/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- solar icons -->
  

  <!-- Modal Error -->
<?php if (session()->getFlashdata('error')): ?>
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="errorModalLabel">Login Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= session()->getFlashdata('error'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  window.addEventListener('DOMContentLoaded', function() {
    var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
    errorModal.show();
  });
</script>
<?php endif; ?>
</body>

</html>