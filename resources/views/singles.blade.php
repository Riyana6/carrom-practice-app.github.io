<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <style>
    body {
        background: rgb(40, 128, 255);
        background: radial-gradient(circle, rgba(40, 128, 255, 1) 38%, rgba(0, 51, 144, 1) 66%, rgba(2, 1, 79, 1) 100%);
    }

    .form-style-9 {
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }

    .form-style-9 ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .form-style-9 ul li {
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }

    .form-style-9 ul li .field-style {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }

    .form-style-9 ul li .field-style:focus {
        box-shadow: 0 0 5px #B0CFE0;
        border: 1px solid #B0CFE0;
    }

    .form-style-9 ul li .field-split {
        width: 49%;
    }

    .form-style-9 ul li .field-full {
        width: 100%;
    }

    .form-style-9 ul li input.align-left {
        float: left;
    }

    .form-style-9 ul li input.align-right {
        float: right;
    }

    .form-style-9 ul li textarea {
        width: 100%;
        height: 100px;
    }

    .form-style-9 ul li input[type="button"],
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }

    .form-style-9 ul li input[type="button"]:hover,
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }


    table {
        background-color: #FFFFFF
    }

    .w3-lobster {
        font-family: "Lobster", serif;
        color: black;
        -webkit-text-stroke: 2px blue;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <div class="w3-container w3-lobster">
                </br>
                </br>
                <h1 class="w3-xxlarge">Single Matches</h1>
            </div>
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <div class="login-box">
                        <form method="post" action="/savesingles" class="form-style-9">
                            {{csrf_field()}}
                            <table>
                                <tr>
                                    <td>Player1</td>
                                    <td><input type="text" class="form-control" name="player1" /></td>
                                </tr>
                                <tr>
                                    <td>Player1 Score</td>
                                    <td><input type="text" class="form-control" name="player1score"></td>
                                </tr>
                                <tr>
                                    <td>Player2</td>
                                    <td><input type="text" class="form-control" name="player2"></td>
                                </tr>
                                <tr>
                                    <td>Player2 Score</td>
                                    <td><input type="text" class="form-control" name="player2score" /></td>
                                </tr>
                            </table>
                            </br>

                            <input type="submit" class="btn btn-primary" value="SAVE">

                        </form>
                    </div>
                    </br>
                    <table class="table">
                        <thead class="thead-dark">
                            <th>Date/Time</th>
                            <th>Player1</th>
                            <th>Player2</th>
                            <th>Player1 Score</th>
                            <th>Player2 Score</th>
                            <th>Winner</th>
                            <th>Action</th>

                        </thead>
                        @foreach($singles as $singles)
                        <tr>

                            <td>{{$singles->created_at}}</td>
                            <td>{{$singles->player1}}</td>
                            <td>{{$singles->player2}}</td>
                            <td>{{$singles->player1score}}</td>
                            <td>{{$singles->player2score}}</td>
                            @if(($singles->player1score)>($singles->player2score))
                            <td>{{$singles->player1}}</td>
                            @else
                            <td>{{$singles->player2}}</td>
                            @endif
                            <td>

                                <a href="/deletesingle/{{$singles->id}}" class="btn btn-danger">Delete</a>
                                <a href="/updatesingle/{{$singles->id}}" class="btn btn-primary">Update</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>