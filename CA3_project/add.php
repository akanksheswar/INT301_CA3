<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Car pooling</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
  
<body>
    <div class="container mt-5">
        <h1>Select car from List</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>Employee Id</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Employee id" 
                    name="id" />
            </div>
            <div class="form-group">
                <label>person name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="person name" 
                    name="iname" />
            </div>
  
            <div class="form-group">
                <label>Number of people</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="number of people" 
                    name="ipeople" />
            </div>
  
            <div class="form-group">
                <label>select car</label>
                <select class="form-control" 
                    name="iselect">
                    <option value="0">
                        Renault KWID (4.49 Lakh)
                    </option>
                    <option value="1">
                        Maruti Alto (3.25 Lakh)
                    </option>
                    <option value="2">
                        Hyundai santro (4.86 Lakh)
                    </option>
                    <option value="3">
                        Rolls-Royce Ghost (5.25-6.83 Crore)
                    </option>
                    <option value="4">
                        Ferrai GTC4Lusso V12 (4.26-4.97 Crore)
                    </option>
                    <option value="5">
                        Lamborghini Aventador S (5.01 Crore)
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" 
                    class="form-control" 
                    placeholder="Date" 
                    name="idate">
            </div>
            <div class="form-group">
                <input type="submit" 
                    value="Book" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $employee_id=$_POST['id'];
            $person_name=$_POST['iname'];
            $number_of_people=$_POST['ipeople'];
            $select_car=$_POST['iselect'];
            $date=$_POST['idate'];
      
  
            $q="insert into projecttb(employee_id,person_name,
            number_of_people,select_car,date)
            values('$employee_id','$person_name',$number_of_people,
            '$select_car','$date')";
  
            mysqli_query($con,$q);
            header("location:index.php");
        }
    ?>
</body>
  
</html>