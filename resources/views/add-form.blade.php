<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <![endif]-->
</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <div class="col-md-6">

                <form action="{{route('studentSave')}}" class="form-group" method="POST" name="form">

                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">

                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label for="group">Group:</label>
                    <input type="text" class="form-control" id="group" name="groupNumb">

                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">

                    <label for="rate">Rate:</label>
                    <input type="number" class="form-control" id="rate" name="rate">

                    <label for="date">Birthday:</label>
                    <input type="date" class="form-control" id="date" name="birthday">

                    <label for="res">Residence:</label>
                    <select id="res" name="residence" class="form-control">
                        <option value="resident">Resident</option>
                        <option value="non-resident">Non-resident</option>
                    </select>

                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>

                    {{csrf_field() }}
                </form>

                        <p><a href="/">Go back to the students list</a></p>

            </div>
            <div class="col-md-6">
                @if(!empty($errors->first()))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @else

                @endif
            </div>
        </div>
    </div>

</body>