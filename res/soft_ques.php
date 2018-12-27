<?php
include_once "connect.php";
if(isset($_POST["fault"])){
    $fault =  $_POST["fault"];
        $sql = "SELECT * FROM fault_questions WHERE fault_category = 1 AND fault_type = '$fault' ORDER BY 'id' desc";
            $run_user = mysqli_query($conn, $sql);
            $check_user = mysqli_num_rows($run_user);
        if($check_user > 0){
            $i = 1;
            while($row = mysqli_fetch_array($run_user)){          
?>
<div class = "questions-list">
            <h5><?php echo $row["fault"] ?></h5>
            <label class="radio-inline">
            <input type="radio" class = "rb-<?php echo $i; ?>" name="<?php echo $row["id"]; ?>" value = "1">True
            </label>
            <label class="radio-inline">
            <input type="radio" class = "rb-<?php echo $i; ?>" name="<?php echo $row["id"]; ?>" value = "0">False
            </label>
            <label class="radio-inline">
            <input type="radio" class = "rb-<?php echo $i; ?>" name="<?php echo $row["id"]; ?>"  value = "0">Not Sure
            </label>
</div>
<?php
                $i++;
            }
        }
    }
?>