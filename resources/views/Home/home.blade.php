<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- jQueary -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Home</title>
    <link href="/custom/home.css" rel="stylesheet">
    <style>
        .box{
            color:yellow;
            font-size: 50px;
        }
        body{
            padding:20px;
        }
    </style>
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
            @if(isset($mainSong))
                @foreach($mainSong as $m)
                    <tr>
                        <th scope="row"><img src="{{$Image[$m->id]}}" alt="not found" height = "100" width = "100"></th>
                        <td>{{$m->Name}}</td>
                        <td>{{$m->DOR}}</td>
                        <td>{{$m->a_name}}</td>
                        <td>
                            @if(!isset($m->rating))
                                <a href="/rating/{{$m->id}}"><button class ="btn btn-primary" type = "button">Give Rating</button></a>
                            @else
                                <div class = "box">
                                    @if($m->rating == 1)
                                        *
                                    @elseif($m->rating == 2)
                                        * *
                                    @elseif($m->rating == 3)
                                        * * *
                                    @elseif($m->rating == 4)
                                        * * * *
                                    @elseif($m->rating == 5)
                                        * * * * *
                                    @endif
                                </div>
                            @endif

                        </td>
                    </tr>
                @endforeach
            @endif
            
            
            
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
            @if(isset($artist) && isset($song))
                @foreach($artist as $a)
                    @foreach($song as $s)
                        @if($a->id == $s->A_id)
                            <tr>
                                <th scope="row">{{$a->Name}}</th>
                                <td>{{$a->DOB}}</td>
                                <td>{{$s->song}}</td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            @endif
                      
        </tbody>
    </table>
</body>
<script>
    $(document).ready(function(){
        // alert('Hi');
        // $('#exampleModal_1').modal('show');
     });

</script>
</html>