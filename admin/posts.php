<?php include "includes/admin-header.php"; ?>

<div id="wrapper">

<?php include "includes/admin-navigation.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                
                <h1 class="page-header">
                ADMIN PAGE!!!
                <small>AUTHOR GOES HERE!</small>
                </h1>
                
                <?php 
                
                    if(isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }
                
                switch($source) {
                        case '34';
                        echo "nice 34";
                        break;
                        case '100';
                        echo "nice 100";
                        break;
                        case '200';
                        echo "nice 200";
                        break;
                        
                    default:
                        
                        include "includes/view_all_posts.php";
                        
                        break;
                }
                
                ?>
                
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin-footer.php"; ?>