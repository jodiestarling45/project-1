<!-- Search form -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        padding: 8px;
        background-color: #dddddd;
    }
</style>
<ul>
    <li><a href="index.php">home</a></li>
    <li><a href="index_2.php?page=add">add new assassin</a></li>
    <li><a href="index_2.php?page=search">search</a></li>
    <li><a href="#about">About</a></li>
</ul>
<form action="" method="post">
    <div class="md-form mt-0">
        <input class="form-control" name="key" type="text" placeholder="Search" aria-label="Search">
    </div>
    <button type="submit" class="btn btn-dark">search</button>
</form>
<div class="container">
    <h2>Bordered Table</h2>
    <p>The .table-bordered class adds borders to a table:</p>
    <table class="table table-bordered">
        <tr>
            <th>key</th>
            <th>name</th>
            <th>image</th>
            <th>info</th>
            <th>price</th>
        </tr>

        <?php foreach ($result as $key =>$person):?>
        <tr><td><?php echo $key ?></td>
            <td><?php echo $person['name']?></td>
            <td><?php echo $person['image']?></td>
            <td><?php echo $person['text']?></td>
            <td><?php echo $person['price']?></td>
            <td>            <a href="index_2.php?page=delete&id=<?php echo $person['id']?>">delete</a>
                <a href="index_2.php?page=update&id=<?php echo $person['id']?>">update</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>