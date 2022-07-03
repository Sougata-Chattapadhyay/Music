<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQueary -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Add Song</title>
    <title>Artist Add</title>
</head>
<body>
@include('Navbar.nav');
    <form action="" method = "Post" style = "width : 80vw;margin : 20px 20px;" id = "artist">
        @csrf
            <div class="form-group row my-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Artist Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Artist Name" name = "name" id = "name">
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                <input type="date" class="form-control"  placeholder="Release Date" name = "dob" id = "dob">
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Bio</label>
                <div class="col-sm-10">
                    <input type="textarea" class="form-control"  placeholder="Bio" name = "bio" id = "bio">
                </div>
            </div>
            
            <center>
                <div class="form-group row">
                    <div class="col-sm-6 my-5">
                        <a href="/home"><button type="button" class="btn btn-light border border-dark">Cancel</button></a>
                        
                    </div>
                    <div class="col-sm-2 my-5">
                        <button type="button" class="btn btn-primary" id = "addArtist">Submit</button>
                    </div>
                </div>
            </center>
    </form>
    
</body>
<script>
    $(document).ready(function(){
        $('#addArtist').click(()=>{
            // alert('click');
            if($('#name').val() == ''){
                alert('Enter the artist name');
            }
            else if($('#dob').val() == '' ){
                alert('Enter Date of Birth');
            }
            else if($('#bio').val() == '' ){
                alert('Enter Bio');
            }
            else{
                alert('submit');
                $('#artist').submit();
            }

        });
    });
</script>
</html>