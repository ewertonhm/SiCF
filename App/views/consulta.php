<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quicksearch e bootstrap</title>
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  </head>
<body>
    <div class="form-group input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
    </div>
     <table id="tabela" class="table table-hover">
  <thead>
      <tr>
          <th>Patrimonio</th>
          <th>Estado</th>
      </tr>
  </thead>
  <tbody>
      <?php 
        require_once '\..\models\classes.php';
        
      ?>
      <tr>
          <th>devo@flexomat.com</th>
          <td>66672</td>
      </tr>

  </tbody>
 </table>
 <script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
 </script>
</body>
</html>