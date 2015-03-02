<?php

function buildNav($nav_param) {
    echo
        '<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    

                <a class="navbar-brand" href="index.php">Strictly Students</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>';
                    
                        foreach ($nav_param as $section => $item) {
                            echo '
                            <li class="page-scroll">
                            <a href="#'.$section.'">'.$item.'</a>
                            </li>';
                        }
                    /*
                    if (@$_SESSION['FBID']){    
                        echo
                        '<li><a href="fblogout.php"><span class="glyphicon glyphicon-user"></span>yuhu '.$_SESSION['USERNAME'].'</a></li>';

                    }
                    else{
                        echo
                        '<li><a href="fbconfig.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';

                    }
*/

                    

             echo'   </ul>
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container-fluid -->
    </nav>';
}
?>