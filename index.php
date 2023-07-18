<?php
                $server = 'localhost'; 
                $username = 'root';
                $password = '';
                $db = 'csc309';
            
                // Open a new connection
                $con = new mysqli($server, $username, $password, $db);
            
                // Check connection
                if ($con->connect_error){
                    die("Connection failed: " . $con->connect_error);
                }
            
               
                $sql = "SELECT * FROM users ORDER BY id DESC";
                
                $result = $con->query($sql);
            
                ?>

<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table border="1" width = "500">
        <thead>
            <tr>
                <th>S/N</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>DATE OF BIRTH</th>
            </tr>
        </thead>

        <tbody>
            <?php
                // Complete code to:
                // Connect to the DB
                // Select all records from users table
                // Display all the selected records
                if ($result->num_rows > 0){
                    $sn = 1;
                    while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
            </tr>
            <?php
                $sn++;
                }} else { ?>
            <tr>
                <td colspan = "6">NO DATA FOUND</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
