<div class="container">
<h1 class="mt-4 mb-3">Article</h1>

<?PHP
//var_dump($_GET);
//Retrieve the id parameter from the url
If (isset($_GET['id']) && is_numeric($_GET['id'])){
   $id = $_GET['id']; 


// Get the database configuration file
require './includes/config.php';

// Connect to the datbase
require MYSQL;

// Build the SQL Query
$stmt = $dbc->prepare("SELECT id, title, content
                       FROM pages
                       WHERE id =:id");
// Using PDO prepared statement with the following named parameter
// :id

// Bind the parameter
$stmt->bindValue(':id',$id, PDO::PARAM_INT);

// Execute the query
$stmt->execute();


// Fetch the records
   $article = $stmt -> fetchAll (PDO::FETCH_ASSOC);

//var_dump($article);
   
// Display the article
   foreach($article_list as $row){
       echo "<ol class='breadcrumb'>
            <li class='breadcrumb-item'><a href='index.php'>Home</a></li>
            <li class='breadcrumb-item'><a href='articles.php'>Articles</a></li>
            <li class='breadcrumb-item active'>{$row['title']}</li>            
        </ol>";
            
       echo "<h2 class='mt-3 mb-3'>{row['title']}</h2>";
       echo "{$row['content']}";
   }

}

?>

</div>

