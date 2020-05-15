<!doctype html>
<html lang="en">
<head>
    <!-- Search form -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
        .checked {
            color: orange;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="form-group">
        <label for="usr">search gun :</label>
        <input type="text" name="key" class="form-control" id="usr">
        <input type="submit" value="searching">
    </div>
    <table class="table" border="2">
        <thead>
        <tr>
            <th style="color:black;">Numerical Order</th>
            <th style="color:black;">Name's gun</th>
            <th style="color:black">Number series</th>
            <th style="color:black;">Brand</th>
            <th style=":black">Data details</th>
            <th style="color:black">Origin</th>
            <th style="color:black">Price</th>
            <th>Status</th>
            <th colspan="3">Type</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($guns as $key => $gun): ?>
        <tr>

            <td><?php echo ++$key ?></td>
            <td><?php echo $gun['name']?></td>
            <td><?php echo $gun['series'] ?></td>
            <td><?php echo $gun['brand'] ?></td>
            <td> <a href="./index_3.php?page=view&id=<?php echo $gun['id']; ?>" class="btn btn-sm"><button type="button" class="btn btn-light">delail</button></a></td>

            <td><?php echo $gun['origin'] ?></td>
            <td><?php echo $gun['price'] ?></td>
            <td><?php echo $gun['status'] ?></td>
            <td><?php echo $gun['type_id'] ?></td>
            <td> <a href="./index_3.php?page=delete&id=<?php echo $gun['id']; ?>" class="btn btn-sm"><button type="button" class="btn btn-light">delete</button></a></td>
            <td> <a href="./index_3.php?page=edit&id=<?php echo $gun['id']; ?>" class="btn btn-sm"><button type="button" class="btn btn-light">update</button></a></td>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index_3.php"><button type="button" class="btn btn-dark">back</button></a>
</form>
</body>
</html>