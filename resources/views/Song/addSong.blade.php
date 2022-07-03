<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Add Song</title>
</head>
<body >
    @include('Navbar.nav')
    <center><h2 class = "my-3">Adding a new Song</h2></center>
    <form style = "width : 80vw;margin : 20px 20px;">
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Song Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Song name">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Release Date</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="inputEmail3" placeholder="Release Date">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Artwork</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="inputEmail3" placeholder="Upload photo">
            </div>
        </div>
        
        <div class=" form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Artists</label>
            <div class="col-md-6">
                <select class="custom-select form-group" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class = "col-md-2">
                <a href="#"><button class = "btn btn-success">Add Artist</button></a>
            </div>
        
        </div>
        <center>
            <div class="form-group row">
                <div class="col-sm-6 my-5">
                    <a href="/"><button type="button" class="btn btn-light border border-dark">Cancel</button></a>
                </div>
                <div class="col-sm-2 my-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </div>
        </center>
    </form>
</body>
</html>