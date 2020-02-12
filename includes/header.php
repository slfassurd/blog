    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Michael Rose's Web Development</title>
        <!-- Setting the correct stylesheet  -->
        <?php
        // checking for the menu
            if(isset($_GET['menu'])){
                    if($_GET['menu'] === 'post')
                    {
                        echo '<link rel="stylesheet" type="text/css" href="./css/post.css">
                        </head>';
                    }
                    else{
                        echo '<link rel="stylesheet" type="text/css" href="./css/main.css">
                        ';
                    }
                }
            else {
                echo '<link rel="stylesheet" type="text/css" href="./css/main.css">
                ';
            }
        ?>