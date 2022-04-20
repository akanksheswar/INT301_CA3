<!-- <?php
    include("connect.php");
  
    if (isset($_POST['btn'])) {
        $date=$_POST['idate'];
        $q="select * from projecttb where Date='$date'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from projecttb";
        $query=mysqli_query($con,$q);
    }
?>
   -->
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>View List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" 
        href="style.css">
</head>
  
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>View List</h1>
                <a href="add.php">Book new</a>
            </div>
            </div>
        </div>
  
        <div class="row mt-4">
            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $qq['employee_id']; ?>
                        </h5>
                        <h5 class="card-title">
                            <?php echo $qq['person_name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $qq['number_of_people']; ?>
                        </h6>
                        <?php
                        if($qq['select_car'] == 0) {
                        ?>
                        <p class="text-info"> Renault KWID (4.49 Lakh)</p>
  
                        <?php
                        } else if($qq['select_car'] == 1) {
                        ?>
                        <p class="text-success">Maruti Alto (3.25 Lakh)</p>

                        <?php
                        } else if($qq['select_car'] == 2) {
                        ?>
                        <p class="text-success">Hyundai santro (4.86 Lakh)</p>

                        <?php
                        } else if($qq['select_car'] == 3) {
                        ?>
                        <p class="text-success">Rolls-Royce Ghost (5.25-6.83 Crore)</p>

                        <?php
                        } else if($qq['select_car'] == 4) {
                        ?>
                        <p class="text-success">Ferrai GTC4Lusso V12 (4.26-4.97 Crore)</p>
  
                        <?php } else { ?>
                        <p class="text-danger">Lamborghini Aventador S (5.01 Crore)</p>
  
                        <?php } ?>
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
  
</html>