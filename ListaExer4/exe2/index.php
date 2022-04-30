<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lote de cheques</title>
  </head>
  <body class="container">
    <h1>Lote de cheques</h1>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="modal" tabindex="-1" style="display: block;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Acessar</h5>
                    </div>
                    <div class="modal-body">
                        <form action="form2.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <label for="n_cheques" class="label-control">
                                        Informe o numero de cheques
                                    </label>
                                    <input type="number" name="n_cheques" id="n_cheques"
                                        class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="soma_form1" class="label-control">
                                        informa  a soma total
                                    </label>
                                    <input type="number" name="soma_form1" id="soma_form1"
                                        class="form-control"/>
                                </div>
                            </div>
                          
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>