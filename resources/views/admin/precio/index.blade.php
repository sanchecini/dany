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
    
<div class="container mt-4">
          <div class="row justify-content-center"> 
            <div class="col-auto">
              <h3> Cliente <span badge bg-secondary>{{$producto->name}}</span> tiene los productos:</h3>

                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Clientes</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($producto->clientes as $registro)
                    <tr>
                       <td> {{$registro->name}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>        
     </div>
    
</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>