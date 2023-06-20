<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Desk Help v1</title>
    <link rel="stylesheet" href="./support/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./support/assets/css/app.css">
</head>
<?php 

$success=false;
$error=false;
require_once('./support/int.php');  

if(isset($_POST['id'])){
    $db=new DB();
    $ticket_q=$db->conn->query("SELECT * FROM tickets WHERE ticket_id='".$_POST['id']."'");
    if($ticket_q->num_rows > 0){
        while ($row  = $ticket_q->fetch_assoc()) {
            header("Location: ./ticket.php?id=".$row['id']);
        }
        
    }else{
        $error="Invalid ticket id";
    }
}

?>
<body>
    <form method="POST">
        <div class="container mt-4">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8">
                   <div class="card">
                       <div class="card-header">Bekijk hier je ticket.</div>
                       <div class="card-body">
                            <?php 
                                if(isset($error) && $error != false){
                                    echo '<div class="alert alert-danger">'.$error.'</div>';
                                }
                            ?>
                                <?php 
                                if(isset($success) && $success != false){
                                    echo '<div class="alert alert-success">'.$success.'</div>';
                                }
                            ?>
                           <div class="form-group">
                               <label>Type hier uw ticket id in.</label>
                               <input type="text" name="id" id="id" required class="form-control">
                           </div>
                           <div class="form-group">
                               <button class="btn btn-primary btn-lg">doorgaan</button>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </form>
</body>
<script src="./support/assets/js/jquery-3.6.0.min.js"></script>
<script src="./support/assets/js/popper.min.js"></script>
<script src="./support/assets/js/bootstrap.min.js"></script>
</html>