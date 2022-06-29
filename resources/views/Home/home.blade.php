<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<body>
   @include('Navbar.nav'); 
   <div class="row my-3">
    <div class="col-10">
        <h2>Top 10 Songs</h2>
    </div>
    <div class="col-2">
        <button class = "btn btn-dark">+ Add Song</button>
    </div>
   </div>
   
    <table class="table" >
        <thead>
            <tr>
            <th scope="col">Artwork</th>
            <th scope="col">Songs</th>
            <th scope="col">Date of Release</th>
            <th scope="col">Artists</th>
            <th scope="col">Rate</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@mdo</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@mdo</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>