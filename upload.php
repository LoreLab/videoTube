<?php require_once("includes/header.php"); ?>
<?php require_once("includes/classes/videoDetailsFormProvider.php"); ?>

<div class="column">
    <?php

      $formProvider = new videoDetailsFormProvider();
      echo $formProvider->createUploadForm();
    ?>
     
</div>
<?php require_once("includes/footer.php"); ?>