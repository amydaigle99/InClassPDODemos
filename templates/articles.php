<div class="container">
<h1 class="mt-4 mb-3">Articles</h1>
        
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
             
// 3. Get the total number of records in categories table
             $sql = 'SELECT COUNT(*) FROM categories';
             $stmt = $dbc->query($sql);
             $cnt = $stmt->fetchColumn();

// 4. Build the SQL Query to retrieve all categories
             $q = "SELECT id, title, description FROM pages";
             
// 5. Check the number of record in recordset
             echo "<h2>Total Categories: $cnt</h2>";
             
// Fetch all the records from the statement above
   $article_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
// Loop an display the articles pages in html table
   echo"<table class ='table table-striped'>
                <thead class ='thead-dark'>
                        <tr>
                        <th>Title</th>
                        <th>Description</th>
                        </tr>
                </thead>
               </tbody>";
   
   foreach($article_list as $row){
       echo "<tr>
                    
                    <td><a href = 'article.php?id={$row['id']}'>{$row['title']}</a></td>
                    <td>{$row['description']}</td>
            </tr>";
   }
   
   echo "</tbody></table>";

?>
        </div>