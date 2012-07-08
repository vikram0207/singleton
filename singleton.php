<?php
// Example of a Singleton Database class
class Database
{
	// Store the single instance of Database
	private static $m_pInstance;

	// Private constructor to limit object instantiation to within the class
	private function __construct() 
	{ 
		echo "Constructor called<br />\n"; 
	}

	// Getter method for creating/returning the single instance of this class
	public static function getInstance()
	{
		if (!self::$m_pInstance)
		{
			self::$m_pInstance = new Database();
		}

		return self::$m_pInstance;
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
	// Get the single instance of the Database class using the gettor 
	// method we created.  Then call it's query method to output some text
	$pDatabase = Database::getInstance();
	$pDatabase->query();
}

// Start the test
testFunction();
testFunction();

// After running this script you will see that the constructor was only called
// once, showing that only one instance of the class was created.

?>
