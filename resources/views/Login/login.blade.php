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
    <title>Login</title>
</head>
<body>
    <div class="card justify-content-center" style = "margin-top : 40vh;width:30vw;height:20vh;margin-left:30vw;">
        <div class="card-header" style = "background:aqua;">
            Continue with :
        </div>
        <div class="card-body">
            <form action="/" method = "POST">
                @csrf
                <div class = "row">
                    <div class="col-md-12">
                        <input class = "input-group " type="email" placeholder="Enter the email" name = "email">
                    </div>
                </div>
                <div class="col-md-12 my-5 text-center">
                        <button class = "btn btn-success" type = "Submit">Continue</button>
                </div>
            </form>
            
            
        </div>
    </div>
</body>
</html>