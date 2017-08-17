<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/solar/bootstrap.min.css">
    <title>Test</title>
    <script src="includes/js/jquery.min.js" charset="utf-8"></script>
    <script src="js.js" charset="utf-8"></script>
  </head>
  <body onload="tabla()">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Insert</a>
        </div>
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a class="navbar-brand" href="lista.php">Lista</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="well well-sm">
            <tr>
                <th>Nombre</th>
                <th>Importe</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody id="tabla">
        </tbody>
      </table>
    </div>

  </body>
</html>
