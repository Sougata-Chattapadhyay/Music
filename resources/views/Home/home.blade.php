<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQueary -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map"></script> -->
    <title>Home</title>
    <link href="/custom/home.css" rel="stylesheet">
    
</head>
<body>
   @include('Navbar.nav'); 
   <div class="row my-3">
        <div class="col-10">
            <h2>Top 10 Songs</h2>
        </div>
        <div class="col-2">
            <a href="/addSong"><button class = "btn btn-dark">+ Add Song</button></a>
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
            <td>
                
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@mdo</td>
            <td>
            <div class="rating">
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                </div>
            </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@mdo</td>
            <td>
            <div class="rating">
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                </div>
            </td>
            </tr>
        </tbody>
    </table>

    <div class="row my-3">
        <div class="col-10">
            <h2>Top 10 Artists</h2>
        </div>
        <div class="col-2">
            <a href="/addArtist"><button class = "btn btn-dark">+ Add Artists</button></a>
        </div>
   </div>
   <table class="table" >
        <thead>
            <tr>
                <th scope="col">Artists</th>
                <th scope="col">DOB</th>
                <th scope="col">Songs</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@mdo</td>
                
            </tr>
        </tbody>
    </table>
</body>
<script>
    $(document).ready(function(){
        toastr.error('Hi! I am error message.');
        alert('Hi');
     });

</script>
</html>