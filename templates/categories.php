<div class="container">
        <h1 class="mt-4 mb-3">Categories</h1>
        
        <!-- mwilliams:  breadcrumb navigation -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">About</li>            
        </ol>
        <!-- end breadcrumb -->
        <div class="row">
            
        

<?php

 // 1. get the configuration file
             require './includes/config.php';
             
 // 2. connect to the database
             require MYSQL;
             //var_dump($dbc);
             
// 3. Get the total number of records in categories table
             $sql = 'SELECT COUNT(*) FROM categories';
             $stmt = $dbc->query($sql);
             $cnt = $stmt->fetchColumn();

// 4. Build the SQL Query to retrieve all categories
             $q = "SELECT id, category, FROM categories ORDER BY 1";
             
// 5. Check the number of record in recordset
             echo "<h2>Total Categories: $cnt</h2>";
             
// 6. Execute the query
             $stmt = $dbc->query($q);
             $category_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($category_list);
            // start list
             echo "<ul>";
             
            
            // Loop the array and display in ul list
             foreach($category_list as $row){
                 echo "<li>".$row['id']." - ". $row['category']."</li>";
             }
            
             
           //end the list
             echo "</ul>";

?>

</div>