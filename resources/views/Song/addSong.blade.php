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
     <!-- jQueary -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Add Song</title>
</head>
<body >
    @include('Navbar.nav')
    <center><h2 class = "my-3">Adding a new Song</h2></center>
    <form method = "Post" action = "/addSong" id = "songsubmit" enctype="multipart/form-data" style = "width : 80vw;margin : 20px 20px;" >
        @csrf
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Song Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Song name" name = "song">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Release Date</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="rd" placeholder="Release Date" name = "date">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Artwork</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="photo" placeholder="Upload photo" name = 'photo'>
            </div>
        </div>
        
        <div class=" form-group row my-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Artists</label>
            <div class="col-md-6">
                <select class="custom-select form-group" id="artist" name = "artist">
                    <option hidden selected value = "">Select Artist</option>
                    @if(isset($artist))
                        @foreach($artist as $a)
                            <option value={{$a->id}}>{{$a->Name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class = "col-md-2">
                <a href="/addArtist"><button class = "btn btn-success" type = "button">Add Artist</button> </a>
            </div>
        
        </div>
        <center>
            <div class="form-group row">
                <div class="col-sm-6 my-5">
                    <a href="/home"><button type="button" class="btn btn-light border border-dark">Cancel</button></a>
                </div>
                <div class="col-sm-2 my-5">
                    <button id = "addSong" class="btn btn-primary" type ="button">Submit</button>
                </div>
                
            </div>
        </center>
    </form>
</body>
<script>
    $(document).ready(function(){
        $('#addSong').click(()=>{
            // alert('click');
            if($('#name').val() == ''){
                alert('Enter Song');
            }
            else if($('#rd').val() == '' ){
                alert('Enter Release Date');
            }
            else if($('#photo').val() == '' ){
                alert('Upload Photo');
            }
            else if($('#artist').val() == ''){
                alert('Select artist')
            }
            else{
                // alert('submit');
                // $('#Song').submit();
                $("#songsubmit").submit();
            }

        });
    });
</script>
</html>