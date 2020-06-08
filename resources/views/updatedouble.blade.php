<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    body {
        background-color: silver;
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
    </style>
</head>

<body>
    <div class="container">
        </br>
        </br>
        </br>
        <form method="post" action="/updatedoubles" class="form-style-9">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Team1</td>
                    <td><input type="text" class="form-control" name="team1" placeholder="Player1/Player2"
                            value="{{$doublesdata->team1}}" />
                        <input type="hidden" class="form-control" name="id" placeholder="Player1/Player2"
                            value="{{$doublesdata->id}}" /></td>
                </tr>
                <tr>
                    <td>Team1 Score</td>
                    <td><input type="text" class="form-control" name="team1score" placeholder="Team1 score"
                            value="{{$doublesdata->team1score}}">
                    </td>
                </tr>
                <tr>
                    <td>Team2</td>
                    <td><input type="text" class="form-control" name="team2" placeholder="Player1/Player2"
                            value="{{$doublesdata->team2}}">
                    </td>
                </tr>
                <tr>
                    <td>Team2 Score</td>
                    <td><input type="text" class="form-control" name="team2score" placeholder="Team2 score"
                            value="{{$doublesdata->team2score}}" /></td>
                </tr>
            </table>
            </br>

            <input type="submit" class="btn btn-primary" value="UPDATE">
            &nbsp;&nbsp; <input type="button" class="btn btn-danger" value="CANCEL">


        </form>
    </div>

</body>

</html>