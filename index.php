<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/solar/bootstrap.min.css">
    <title>Test</title>
    <script src="includes/js/jquery.min.js" charset="utf-8"></script>
    <script src="js.js" charset="utf-8"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tati</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="alert alert-success" id="div_exito" style="display:none">
</div>
<div class="alert alert-warning" id="div_error" style="display:none">
</div>
<input type="text" id="txtNombre" class="form-control" value="" placeholder="Nombre">
<input type="number" id="txtImporte" class="form-control" value="">
<input type="date" id="txtFecha" class="form-control" value="">


<button type="button" id="btnSave" class="btn btn-default">Ok</button>

  </body>
</html>
