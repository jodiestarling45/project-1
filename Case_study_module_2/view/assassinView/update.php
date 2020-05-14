<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
    <style>
        /*-----Background-----*/

        body{
            background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
            background-repeat:no-repeat;
            background-size:cover;
            width:100%;
            height:100vh;
            overflow:auto;

        }

        /*-----for border----*/
        .container{
            font-family:Roboto,sans-serif;
            background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;

            border-style: 1px solid grey;
            margin: 0 auto;
            text-align: center;
            opacity: 0.8;
            margin-top: 67px;
            box-shadow: 2px 5px 5px 0px #eee;
            max-width: 500px;
            padding-top: 10px;
            height: 363px;
            margin-top: 166px;
        }
        /*--- for label of first and last name---*/
        .lastname{
            margin-left: 1px;
            font-family: sans-serif;
            font-size: 14px;
            color: white;
            margin-top: 10px;
        }
        .firstname{
            margin-left: 1px;
            font-family: sans-serif;
            font-size: 14px;
            color: white;
            margin-top: 5px;
        }
        #lname{
            margin-top:5px;
        }


        /*---for heading-----*/
        .heading{
            text-decoration:bold;
            text-align : center;
            font-size:30px;
            color:#F96;
            padding-top:10px;
        }
        /*-------for email----------*/
        /*------label----*/
        #email{
            margin-top: 5px;
        }
        /*-----------for Password--------*/
        /*-------label-----*/
        .mail{
            margin-left: 44px;
            font-family: sans-serif;
            color: white;
            font-size: 14px;
            margin-top: 13px;
        }
        .pass{
            color: white;
            margin-top: 9px;
            font-size: 14px;
            font-family: sans-serif;
            margin-left: 6px;
            margin-top: 9px;
        }
        #password{
            margin-top: 6px;
        }
        /*------------for phone Number--------*/
        /*----------label--------*/
        .pno{
            font-size: 18px;
            margin-left: -13px;
            margin-top: 10px;
            color: #ff9;

        }

        /*--------------for Gender---------------*/
        /*--------------label---------*/
        .gender {
            color: white;
            font-family: sans-serif;
            font-size: 14px;
            margin-left: 28px;
            margin-top: 8px;
        }

        /*---------- for Input type--------*/
        .col-xs-4.male{
            color: white;
            font-size: 13px;
            margin-top: 9px;
            padding-bottom: 16px;
        }
        .col-xs-4.female {
            color: white;
            font-size: 13px;
            margin-top: 9px;
            padding-bottom: 16px;
            padding-right: 95px;
        }
        /*------------For submit button---------*/
        .sbutton{
            color: white;
            font-size: 20px;
            border: 1px solid white;
            background-color: #080808;
            width: 32%;
            margin-left: 41%;
            margin-top: 16px;
            box-shadow: 0px 2px 2px 0px white;

        }
        .btn.btn-warning:hover {
            box-shadow: 2px 1px 2px 3px #99ccff;
            background:#5900a6;
            color:#fff;
            transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;

        }

    </style>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <!---heading---->
        <header class="heading"> infomation </header><hr></hr>
        <!---Form starting---->
        <div class="row ">
            <!--- For Name---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="firstname"> Name :</label> </div>
                    <div class="col-xs-8">
                        <input type="text" name="name" id="fname" placeholder="Name" class="form-control ">
                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="lastname">decribe your self</label></div>
                    <div class ="col-xs-8">
                        <input type="text" name="someInfo" id="lname" placeholder="decribe your self" class="form-control last">
                    </div>
                </div>
            </div>
            <!-----For email---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="mail" >your picture :</label></div>
                    <div class="col-xs-8"	>
                        <input type="file" name="image"  id="email" placeholder="your picture" class="form-control" >
                    </div>
                </div>
            </div>
            <!-----For Password and confirm password---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="pass">price :</label></div>
                    <div class="col-xs-8">
                        <input type="text" name="price" id="password" placeholder="price" class="form-control">
                    </div>
                </div>
            </div>

            <!-----------For Phone number-------->
            <button type="submit">

                <div class="btn btn-warning" name="upload">Submit</div>

            </button>
        </div>


    </div>

</form>
</body>
</html>

