<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a href="/notes" class="text-xl text-blue-500 hover:underline">Go back...</a>
      <p class="text-xl font-medium mt-5">
        <?= htmlspecialchars($note['body']) ?>
      </p>
  </div>
</main>


<?php require base_path('views/partials/footer.php') ?>