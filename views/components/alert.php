<link href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'bootstrap.css'?>" rel="stylesheet" type="text/css"/>
<!-- Toasts Bootstrap -->
<div aria-live="polite" aria-atomic="true" class="position-relative">
  <div class="toast-container position-fixed bottom-0 end-0 p-3">

    <?php if (isset($_SESSION['success'])): ?>
      <div class="toast align-items-center text-bg-success border-0" 
           role="alert" 
           data-bs-autohide="true" 
           data-bs-delay="3000">
        <div class="d-flex">
          <div class="toast-body">
            <?= $_SESSION['success']; ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
      <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="toast align-items-center text-bg-danger border-0" 
           role="alert" 
           data-bs-autohide="true" 
           data-bs-delay="3000">
        <div class="d-flex">
          <div class="toast-body">
            <?= $_SESSION['error']; ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
      <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

  </div>
</div>

<script>
  // Initialiser automatiquement tous les toasts présents sur la page
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.toast').forEach(toastEl => {
      new bootstrap.Toast(toastEl).show();
    });
  });
</script>
<script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'bootstrap.min.js'?>" type="text/javascript"></script>
