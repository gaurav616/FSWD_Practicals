<?php
	include_once('connection.php');
?>
<?php
	if(isset($_POST['submit'])){
		if(!(empty($_POST['bookName']) || empty($_POST['authorName']) || !isset($_POST['isbnNumber']) 
			|| !isset($_POST['publisherName']) || !isset($_POST['publicationYear']) || !isset($_POST['noOfPages']) || !isset($_POST['bookType']))){
			$bookName = $_POST['bookName'];
			$authorName = $_POST['authorName'];
			$isbnNumber = $_POST['isbnNumber'];
			$publisherName = $_POST['publisherName'];
			$publicationYear = $_POST['publicationYear'];
			$noOfPages = $_POST['noOfPages'];
			$bookType = $_POST['bookType'];

			$sql = "INSERT INTO `BookDetails` (`isbn`, `bookName`, `authorName`, `publisherName`, `publicationYear`, `noOfPages`, `bookType) VALUES 
			('$isbnNumber', '$bookName', '$authorName', '$publisherName', '$publicationYear', '$noOfPages', '$bookType');";
			mysqli_query($conn, $sql);
		}
		else
			echo "Please fill in all the values before submitting";	
					
	}
?>