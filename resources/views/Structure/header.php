<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <base href="http://localhost:8888/ownMVC/" /> -->
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    

</head>
<body>
<br>
<h1>HEADER HTML</h1>
<br>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
    <div class="content">
        <?php 
        echo getcwd();
        echo ('<br>');
        var_dump(__DIR__);
        echo('br');
        var_dump(realpath( __DIR__));
        if (file_exists(__DIR__ . '/test.js'))
        { echo ('DZIALANKOooooooo'); };
        ?>


