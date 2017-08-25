<?php

//Utility function that connects to the MySQL database via MySQLi
function ConnectToDB()
{
    //database connection information
    $servername = "localhost";
    $username = "root";
    $password = ""; //Empty password, since we run locally
    $dbname = "ascii_db"; //Your database name from PHPMyAdmin

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    // Check connection
    if (!$conn)
    {
        //if the connection failed, display an error message
        die("Connection failed: " . mysqli_connect_error());
    }

    //return DB connection
    return $conn;
}


//Function that gets all ASCII Arts from the database and builds an HTML Table
function RetrieveASCIIArts()
{
  //start building the HTML Table
  $output = "<table class='ascii_table'>";

  //create the database query
  $query = "SELECT * FROM ascii_art ORDER BY id DESC";

  //connect to the database
  $conn = ConnectToDB();

  //execute the SQL query
	$result = $conn->query($query);

  //if we get any rows back from the database, start looping through them and build a table row (TR)
	if ($result->num_rows > 0)
	{
	    // output data of each row
	    while($row = $result->fetch_assoc())
	    {
	        //build an HTML table row and insert the ASCII art
	        $output = $output . "<tr>
                                  <td>
                                      <br/><br/>
                                      <p class='ascii_header'>" . $row["title"] . "
                                        <a href='removeASCII.php?id=" . $row["id"] . "'><img src='remove.png' height='15px' /></a>
                                      </p>
                                      <pre>" . $row["content"] . "</pre>
                                  </td>
                                </tr>";
	    }
	}



	//close connection
  $conn->close();

  $output = $output . "</table>";

  //return the final table
  return $output;
}

?>
