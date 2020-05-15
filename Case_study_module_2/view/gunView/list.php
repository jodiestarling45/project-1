<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <style>
        .container {
            height: 1000px;
            width: 1500px;
            margin: auto;
        }

        .right {
            height: 70%;
            width: 20%;
            float: left;
        }

        .left {
            height: 70%;
            width: 80%;
            float: left;
        }
        .footer{
            text-align: center;
            width: 100%;
            clear: both;
            position: relative;
            height: 200px;
            margin-top: -200px;
        }

        .navigation {
            margin-left: 1px;
            height: 700px;
            width: 130px;
            background-color:;
            font-family: monospace;
            font-size: 2em;
            color:;
        }

        .navlist a:hover {
            color: hotpink;
        }


        .navlist {
            border: solid;
            border-color: black;
            border-radius: .3em .3em .3em .3em;
            height: 200px;
            width: 200px;
            display: block;
            margin-bottom: 3px;
            padding-left: 0px;
            padding-right: 14px;
        }

        .navlist ul li {
            float: left;
        }

        .navlist li {
            list-style-type: none;
        }

        .navlist li a {
            color: black;
            display: block;
            border-bottom: solid black;
            text-align: center;
            text-decoration: none;
            height: 27px;
            width: 190px;
            float: left;
            padding: 12px;
        }

        .navlist a:hover {
            background-color: black;
        }


        /*Login Button*/
        #logup {
            float: right;
            height: 50px;
            width: 170px;
        }

        body {
            font: normal medium/1.4 sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #eee;
        }

        tbody tr:nth-child(odd) {
            background: #ccc;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .checked {
            color: orange;
        }

        .picture {

        }
        .products {
            display: flex;
            flex-wrap: wrap;
        }

        .product-card {
            padding: 2%;
            flex-grow: 1;
            flex-basis: 16%;

            display: flex; /* so child elements can use flexbox stuff too! */
        }
        .product-card {
            flex: 1 16%;
        }
        .product-card {
            flex: 1 16%;
        }
        CSS
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

        *{
            padding:0;
            margin:0;
        }

        html{
            background-color: #eaf0f2;
        }

        body{
            font:16px/1.6 Arial,  sans-serif;
        }

        header{
            text-align: center;
            padding-top: 100px;
            margin-bottom:190px;
        }

        header h1{
            font: normal 32px/1.5 'Open Sans', sans-serif;
            color: #3F71AE;
            padding-bottom: 16px;
        }

        header h2{
            color: #F05283;
        }

        header span{
            color: #3F71EA;
        }


        /* The footer is fixed to the bottom of the page */

        footer{
            position: fixed;
            bottom: 0;
        }

        @media (max-height:800px){
            footer { position: static; }
            header { padding-top:40px; }
        }


        .footer-distributed{
            background-color: #2c292f;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 80px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left{
            width: 30%;
        }

        .footer-distributed h3{
            color:  #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }

        /* The company logo */

        .footer-distributed .footer-left img{
            width: 30%;
        }

        .footer-distributed h3 span{
            color:  #e0ac1c;
        }

        /* Footer links */

        .footer-distributed .footer-links{
            color:  #ffffff;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a{
            display:inline-block;
            line-height: 1.8;
            text-decoration: none;
            color:  inherit;
        }

        .footer-distributed .footer-company-name{
            color:  #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center{
            width: 35%;
        }


        .footer-distributed .footer-center i{
            background-color:  #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope{
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p{
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin:0;
        }

        .footer-distributed .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }

        .footer-distributed .footer-center p a{
            color:  #e0ac1c;
            text-decoration: none;;
        }


        /* Footer Right */

        .footer-distributed .footer-right{
            width: 30%;
        }

        .footer-distributed .footer-company-about{
            line-height: 20px;
            color:  #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span{
            display: block;
            color:  #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons{
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* Here is the code for Responsive Footer */
        /* You can remove below code if you don't want Footer to be responsive */


        @media (max-width: 880px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right{
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i{
                margin-left: 0;
            }

        }

        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

        *{
            padding:0;
            margin:0;
        }

        html{
            background-color: #eaf0f2;
        }

        body{
            font:16px/1.6 Arial,  sans-serif;
        }

        header{
            text-align: center;
            padding-top: 100px;
            margin-bottom:190px;
        }

        header h1{
            font: normal 32px/1.5 'Open Sans', sans-serif;
            color: #3F71AE;
            padding-bottom: 16px;
        }

        header h2{
            color: #F05283;
        }

        header span{
            color: #3F71EA;
        }


        /* The footer is fixed to the bottom of the page */

        footer{
            position: fixed;
            bottom: 0;
        }

        @media (max-height:800px){
            footer { position: static; }
            header { padding-top:40px; }
        }


        .footer-distributed{
            background-color: #2c292f;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 80px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left{
            width: 30%;
        }

        .footer-distributed h3{
            color:  #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }

        /* The company logo */

        .footer-distributed .footer-left img{
            width: 30%;
        }

        .footer-distributed h3 span{
            color:  #e0ac1c;
        }

        /* Footer links */

        .footer-distributed .footer-links{
            color:  #ffffff;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a{
            display:inline-block;
            line-height: 1.8;
            text-decoration: none;
            color:  inherit;
        }

        .footer-distributed .footer-company-name{
            color:  #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center{
            width: 35%;
        }


        .footer-distributed .footer-center i{
            background-color:  #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope{
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p{
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin:0;
        }

        .footer-distributed .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }

        .footer-distributed .footer-center p a{
            color:  #e0ac1c;
            text-decoration: none;;
        }


        /* Footer Right */

        .footer-distributed .footer-right{
            width: 30%;
        }

        .footer-distributed .footer-company-about{
            line-height: 20px;
            color:  #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span{
            display: block;
            color:  #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons{
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* Here is the code for Responsive Footer */
        /* You can remove below code if you don't want Footer to be responsive */


        @media (max-width: 880px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right{
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i{
                margin-left: 0;
            }

        }
    </style>

</head>
<body>

<div class="fullcreen">
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="index_3.php">home</a></li>
                        <li><a href="index_3.php?page=add">add new</a></li>
                        <li><a href="./index_2.php?page=">hire assassin</a></li>
                        <li><a href="index_3.php?page=search">search</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <form action="./index_3.php?page=search">
                <label for="usr">search gun :</label>
                <input type="text" name="key" class="form-control" id="usr">
                <input type="submit" value="searching">
            </form>
        </div>
        <div class="left">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <div class="picture">
                <img style="height: 300px;width: 1200px"
                     src="https://static.seattletimes.com/wp-content/uploads/2020/02/02132020_background-checks_182006-1560x989.jpg"
                     alt="">
            </div>
            <section class="products">
                <?php foreach ($guns as $key => $gun): ?>


                    <!-- It's likely you'll need to link the card somewhere. You could add a button in the info, link the titles, or even wrap the entire card in an <a href="..."> -->


                            <a href="./index_3.php?page=view&id=<?php echo $gun->id; ?>" class="btn btn-sm">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="product-info">
                                        <h5><?php echo $gun->name ?></h5>
                                        <h5><?php echo $gun->series ?></h5>
                                        <h6><?php echo $gun->price ?></h6>
                                        <h6><?php echo $gun->brand ?></h6>
                                        <h6><?php echo $gun->origin ?></h6>
                                        <h6><?php echo $gun->status ?></h6>
                                        <h6><?php echo $gun->type_id ?></h6>
                                        <a href="./index_3.php?page=delete&id=<?php echo $gun->id; ?>" onclick="return confirm('do you want to delet')" class="btn btn-sm">
                                            <button type="button" class="btn btn-light">delete</button>
                                        </a>
                                        <a href="./index_3.php?page=edit&id=<?php echo $gun->id; ?>" class="btn btn-sm">
                                            <button type="button" class="btn btn-light">update</button>
                                        </a>
                            </a>
                        </div>
                    </div>

                    <!-- more products -->


                <?php endforeach; ?>
            </section>


        </div>
        <div class="footer">

            <p>Author: Hege Refsnes<br>
                <a href="mailto:hege@example.com">hege@example.com</a></p>
            <p class="footer-company-about">
                <span>About the company</span>
                We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
</div>
</body>
</html>