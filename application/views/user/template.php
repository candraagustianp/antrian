<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets') ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets') ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets') ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url('assets') ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url('assets') ?>/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link type="text/css" href="<?= base_url('assets') ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="<?= base_url('assets') ?>/css/neumorphism.css" rel="stylesheet">

    <style>
      body, h1, p {
        font-family: 'Lato', sans-serif;
      }

      .jamklik{
        cursor: pointer;
      }
      .jamklik:hover:not(.nonaktif,.reserved){
        background-color: #136c43 !important;
        color: #fff !important;
      }
      .reserved, .nonaktif{
        background-color: #696969 !important;
        color: #cfcfcf !important;
        cursor: not-allowed;
      }
      .btn-success{
        background-color: #002878;
        background-image: linear-gradient(45deg, #33d9de 0%, #33d9de 55%, #243f81 90%);
        background-position: 100% 0;
        background-size: 200% 200%;
        color: white !important;
        padding: 12px 48px;
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        font-weight: 200;
        text-decoration: none;
        box-shadow: 0 16px 32px 0 rgba(0, 40, 120, .35);
        transition: all 0.5s ease;
      }
      .btn-success:hover {
        box-shadow: 0 0px 0px 0 rgba(0, 40, 120, 0);
        background-position: 0 0;
      }
    </style>
  </head>


    <title>Antrian</title>
  </head>
  <body>
    
    <div class="container my-3 py-3">
        <div class="card bg-primary border-light shadow-soft">
            <?= $content ?>
        </div>
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
    </script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>
    <script>
      let url_tanggal = '<?= site_url('Antrian/getAntrian/') ?>';
    </script>
    <script src="<?= base_url('assets/js/skrip.js') ?>"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
