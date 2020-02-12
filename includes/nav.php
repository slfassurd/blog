<?php
    //Class to define the menu object

    //Display the navbar and highlight the current page
    function displayMenu($link){
        //Variable that stores the Navbar
        $page = ["Home"=>"index" ,"About"=>"about","Posts"=>"post"];
        // Loop through the array
        foreach ($page as $currentPage => $value) 
            {
            // Check to see if current itteration = the link sent in    
            if ($link === $value)
                {
                    echo '<li><a href="./' . $value . '.php?menu='. $value .'"><span class = "current">'. $currentPage . '</span></a></li>';
                }
            else{
                    echo'<li><a href= "./' . $value . '.php?menu='.$value.'">'. $currentPage . '</a></li>'; 
            }
         }
    }
?>
<div id = "nav">
        <!-- Main Title --> 
		<div class="title">
            <?php	
                if (isset($_GET['menu'])){
                    $menu = $_GET['menu']; 
                    switch($menu){
                        
                        case "index" : echo "<h1>Michael Rose's Blog</h1>";
                            break;
                        case "about" : echo "<h1>About Michael Rose</h1>";
                            break;
                        case "post"  : echo "<h1>Blog Posts</h1>";
                            break;
                        default : echo "<h1>Michael Rose's Blog</h1>";
                        }
                }
                else {
               echo "<h1>Michael Rose's Blog</h1>";
                }
            ?>
		</div>
		<div class="menu"> 	
            <ul>
                <!-- The menu list -->
                <?php 

                    if (isset($_GET['menu']))
                        {
                            displayMenu($_GET['menu']);
                        }
                    else
                        {
                            displayMenu("index");
                        }
                    
                ?>
            </ul>
		</div>