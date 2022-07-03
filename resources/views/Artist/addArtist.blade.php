<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Add</title>
</head>
<body>
@include('Navbar.nav');
<form style = "width : 80vw;margin : 20px 20px;">
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Artist Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Artist Name">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="inputEmail3" placeholder="Release Date">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Bio</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="inputEmail3" placeholder="Bio">
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