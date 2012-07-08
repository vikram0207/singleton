<?php
// Example of a standard Database class
class Database
{
	// Standard, public constructor.  Nothing new here
	public function __construct() 
	{ 
		echo "Constructor called<br />\n"; 
	}

	// Test function to simulate a query
	public function query()
	{
		echo "Running query on database conenction...<br />\n";
	}
}

// Wrap the test code in a function 
function testFunction()
{
	// Create an instance of the Database class and call it's query method
	// to output some text
	$pDatabase = new Database();
	$pDatabase->query();
}

// Start the test
testFunction();
testFunction();

// After running this script you will see that the constructor has been
// called twice, showing that two instances of the Database class have created.

?>