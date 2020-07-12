<?php $this->_title = "Erreur"; ?>

<a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-primary mb-5">Retourner à la page précédente</a>

<p class='text-center '><?=($errorMsg)?>