<?php
$app_path = $_SERVER['DOCUMENT_ROOT'].'/payroll/';
include($app_path.'includes/top_header.php');
include($app_path.'includes/header.php');
include($app_path.'includes/sidebar.php');


?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container card" style="padding: 15px; margin-top: 15px">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created On</th>
            </tr>
        </thead>
        <tbody>
            <?php
              
              $sql="select * from admin";
              $run=mysqli_query($conn,$sql);

              while($row=mysqli_fetch_array($run)){

              ?>


            
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['created_on']; ?></td>
            </tr>

            <?php } ?>

             
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created On</th>
            </tr>
        </tfoot>
    </table>
            </div>

            
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php
include($app_path.'includes/footer.php');

?>
        
        
 