<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Views are never called idrectly. They must be called throguh Controller.
        1. Make the view. (demopage.php)
        2. Make the controller. (PageController.php) in controllers folder -->

    <h2><?php echo $title; ?></h2>
    <h1>Welcome to CI3 crash course!!!</h1>

    <br>

    <!-- using shortcut to display -->
    <h2><?= $body; ?></h2> 
    <h2><?= $footer; ?></h2>
    
</body>
</html>