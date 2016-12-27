<?php

/*

require_once ("pdo-database.php");
$database = new Database();

*/

/* INSERT TO DATABASE AND GET LAST INSERT ID
$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');
$database->bind(':fname', 'John');
$database->bind(':lname', 'Smith');
$database->bind(':age', '24');
$database->bind(':gender', 'male');
$database->execute();

//echo $database->lastInsertId();
*/


/* USING TRASACTION TO INSERT ENTRIES
try 
{
	$database->beginTransaction();
	$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');
	$database->bind(':fname', 'Jenny');
	$database->bind(':lname', 'Smith');
	$database->bind(':age', '23');
	$database->bind(':Xgender', 'female');
	$database->execute();

	$database->bind(':fname', 'Jilly');
	$database->bind(':lname', 'Smith');
	$database->bind(':age', '25');
	$database->bind(':gender', 'female');
	$database->execute();

	$database->endTransaction();

} catch(PDOException $e)
	{
		$database->cancelTransaction();
		echo $e->getMessage();
	};
*/

/* GET ARRAY OF DATABASE TABLE USING SELECT STATEMENT

$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE FName = :fname');
$database->bind(':fname', 'Jenny');
$row = $database->single();

echo "<pre>";
print_r($row);
echo "</pre>";

$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE LName = :lname');
$database->bind(':lname', 'Smith');
$rows = $database->resultset();
echo "<pre>";
print_r($rows);
echo "</pre>";

// ROW COUNT SHOW
echo $database->rowCount();
*/

?>