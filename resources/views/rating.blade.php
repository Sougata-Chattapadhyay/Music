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
    <title>Rating</title>
    <style>
        .gold{
            color:yellow;
            /* border:1px solid black; */
            font-size: 40px;
        }
    </style>
</head>
<body>
@include('Navbar.nav')
    <div class="card justify-content-center" style = "margin-top : 40vh;width:30vw;height:20vh;margin-left:30vw;">
            <div class="card-header" style = "background:aqua;">
                Enter the reting :
            </div>
            <div class="card-body">
                <form method = "Post" action = "/rating/{{$data->id}}" id = "rating" style = "width : 50vw;margin : 20px 20px;">
                    @csrf
                    <input hidden type="text" id = "s_id" name = "s_id" value = {{$data->id}}>
                    <input hidden type="text" id = "rnum" name = "rnum" >
                    <div class="form-check my-3">
                        <input type="checkbox" class="form-check-input" id="star1" name = "star1">
                        <label class="form-check-label gold" for="exampleCheck1" > * </label>
                    </div>
                    <div class="form-check my-3">
                        <input type="checkbox" class="form-check-input" id="star2" name = "star2">
                        <label class="form-check-label gold" for="exampleCheck1"> * *</label>
                    </div>
                    <div class="form-check my-5">
                        <input type="checkbox" class="form-check-input" id="star3" name = "star3">
                        <label class="form-check-label gold" for="exampleCheck1"> * * *</label>
                    </div>
                    <div class="form-check my-5">
                        <input type="checkbox" class="form-check-input" id="star4" name = "star4">
                        <label class="form-check-label gold" for="exampleCheck1"> * * * *</label>
                    </div>
                    <div class="form-check my-5">
                        <input type="checkbox" class="form-check-input" id="star5" name = "star5">
                        <label class="form-check-label gold" for="exampleCheck1"> * * * * *</label>
                    </div>
                    <button id = "rate" class="btn btn-primary" type ="button">Submit</button>
                </form>
            </div>
    </div>
</body>
<script>
     $(document).ready(function(){
        $('#star1').click(()=>{
            // alert('*');
            $('#star2').prop('checked',false);            
            $('#star3').prop('checked',false);            
            $('#star4').prop('checked',false);            
            $('#star5').prop('checked',false);
            $('#rnum').val('1');            

        });
        $('#star2').click(()=>{
            // alert('* *');
            $('#star1').prop('checked',false);            
            $('#star3').prop('checked',false);            
            $('#star4').prop('checked',false);            
            $('#star5').prop('checked',false);
            $('#rnum').val('2');            

        });
        $('#star3').click(()=>{
            // alert('* * *');
            $('#star1').prop('checked',false);            
            $('#star2').prop('checked',false);            
            $('#star4').prop('checked',false);            
            $('#star5').prop('checked',false); 
            $('#rnum').val('3');            

        });
        $('#star4').click(()=>{
            // alert('* * * *');
            $('#star1').prop('checked',false);            
            $('#star2').prop('checked',false);            
            $('#star3').prop('checked',false);            
            $('#star5').prop('checked',false); 
            $('#rnum').val('4');            
            
        });
        $('#star5').click(()=>{
            // alert('* * * * *');
            $('#star1').prop('checked',false);            
            $('#star2').prop('checked',false);            
            $('#star3').prop('checked',false);            
            $('#star4').prop('checked',false);
            $('#rnum').val('5');            

        });
        $('#rate').click(()=>{
            if($('#star1').is(':checked') || $('#star2').is(':checked') || $('#star3').is(':checked') || $('#star4').is(':checked') || $('#star5').is(':checked')){
                // alert('True');  
                $("#rating").submit();
            }
            else{
                alert('Enter reating');
            }
        });
     });
</script>
</html>