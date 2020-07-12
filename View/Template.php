<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title><?= $title ?></title>
  <base href="<?= $racineWeb ?>">
  <link rel="stylesheet" href="content/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="content/style.css">
  <script src="content/jquery-3.5.1.min.js"></script>
  <script src="content/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="content/bootstrap/js/bootstrap.js"></script>
</head>

<body>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="post">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connection">Connexion</a>
            </li>
          </ul>
        </div>
      </nav>
    <?= $content ?>
  </div>
</body>

<!-- TinyMCE -->
<script type="text/javascript" src="content/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    console.log('ok');
  tinyMCE.init({
  mode : "specific_textareas",
  editor_selector : "mceEditor",
	language : "fr",
  });
</script>

</html>