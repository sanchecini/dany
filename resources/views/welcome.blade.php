<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ejemplo</title>
  </head>
  <body>
    
   

   
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
         
          <th>Cliente</th>
         
          <th>Producto</th>
        </tr>
      </thead>
      <tbody>
      @foreach($precios as $precio)
        <tr>
          <td scope="row"></td>
          <td>{{$precio->cliente_id}}</td>
          <td>{{$precio->producto_id}}</td>
          
          

          @endforeach
         
        </tr>
        
      </tbody>
      
    </table>




   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>