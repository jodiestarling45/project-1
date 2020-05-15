
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
    <style>
        .container {
            height: 1000px;
            width: 1000px;
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
    </style>

</head>
<body>

<div class="container">
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">home</a></li>
                    <li><a href="index.php?page=add">add new</a></li>
                    <li><a href="./index_2.php?page=">hire assassin</a></li>
                    <li><a href="index.php">home</a></li>
                    <li><a href="index_2.php?page=add">add new assassin</a></li>
                    <li><a href="index_2.php?page=search">search</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="right">
        <a href="index.php?page=search">search</a>

    </div>
    <div class="left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="800px" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <table>
            <tr>
                <th>num</th>
                <th>name</th>
                <th>image</th>
                <th>text</th>
                <th>price</th>
                <th></th>
            </tr>
            <?php foreach ($result as $key => $person):?>
                <tr>
                    <td><?php echo $key?></td>
                    <td><?php echo $person['name']?></td>
                    <td><img src="<?php echo $person['image']?>" alt=""></td>
                    <td><?php echo $person['text']?></td>
                    <td><?php echo $person['price']?></td>
                    <td>
                        <a href="index_2.php?page=delete&id=<?php echo $person['id']?>">delete</a>
                        <a href="index_2.php?page=update&id=<?php echo $person['id']?>">update</a>

                    </td>
                </tr>
            <?php endforeach;?>
        </table>

    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>