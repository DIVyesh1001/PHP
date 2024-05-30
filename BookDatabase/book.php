<?php
include("database.php");
if(isset($_POST['submit'])) {
    $accession_no=(int)$_POST["accession_no"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $edition=(int)$_POST["edition"];
    $publisher=$_POST["publisher"];

    if(empty($title)){
        echo"fill all fields";
    }
    else{
        
        $sql="INSERT INTO booksinfo values($accession_no,'$title','$author',$edition,'$publisher')";
        try{
            
            mysqli_query($conn,$sql);
            echo"inserted";
        }
        catch(mysqli_sql_exception)
        {
            echo"some errror";
        }
    }

}

if(isset($_POST["search"])){
    $search_title=$_POST["search_title"];

    $sql="SELECT * FROM booksinfo WHERE title='$search_title'";
    $results=mysqli_query($conn,$sql);
    if(mysqli_num_rows($results)>0){
        while($row=mysqli_fetch_assoc($results)){
            // echo $row["title"]."<br>";
            // echo $row["author"]."<br>";
            // echo $row["publisher"]."<br>";
            $feched_title=$row["title"];
            $feched_author=$row["author"];
            $feched_publisher=$row["publisher"];
        }
    }
    else{
        echo"no results found";
    }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book info</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="number" name="accession_no" placeholder="Accession number"><br>
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="author" placeholder="Author"><br>
        <input type="text" name="edition" placeholder="Edition"><br>
        <input type="text" name="publisher" placeholder="Publisher"><br>
        <input type="submit" name="submit" value="SUBMIT"><br>
        <input typr="text" name="search_title" placeholder="SEARCH A BOOK"><br>
        <input type="submit" name="search" value="SEARCH">
    </form>
    <?php
    if(isset($feched_title)){
        echo "Title : ".$feched_title."<br>";
    }
    if(isset($feched_author)){
        echo "Author : ".$feched_author."<br>";
    }
    if(isset($feched_publisher)){
        echo "Publisher : ".$feched_publisher."<br>";
    }
    ?>
</body>
</html>
<?php
mysqli_close($conn);
?>