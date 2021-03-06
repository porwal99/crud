
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Update user data</title>

        <style>
            .jumbotron{
                padding:3px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div class='row'>
            <div class="jumbotron">
                <div class="container">
                    <h2 class="display"><strong>Update Data</strong></h2>
                </div>
            </div>
            <div class='col-sm-4'></div> 
            <div class='col-sm-4'>
                <form action="/update" class="form-group" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="username">Username </label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{$data['username']}}"/>
                    <br>
                    <label for="email">Email </label> 
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data['email']}}"/>
                    <br>
                    <label for="gender" class="form-check-label" >Gender</label> 
                    <input type="radio" class="form-check-input" name="gender" value="male" />Male &nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" value="female"/>Female
                    <br><br>
                    <label for="dob"> Date of Birth </label> 
                    <input type="date" class="form-control" name="dob" value="{{$data['dob']}}"/>
                    <br>
                    <button type="submit" name="submit"> Update</button>

                </form>
            </div>
            <div class='col-sm-4'></div> 

        </div>
    </body>
</html>
