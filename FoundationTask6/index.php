<?php
// Task: Create a local mysql database and setup a php script to connect to it.
// Create one table in the database called "Person" with fields : FirstName, Surname, DateOfBirth, EmailAddress, Age
// Create a class in your php script called "Person" that will have 6 functions:
// 1. createPerson
// 2. loadPerson
// 3. savePerson
// 4. deletePerson
// 5. loadAllPeople
// 6. deleteAllPeople

// Subtasks:
// I. Add a for loop that creates 10 new People
// II. Implement the loadAllPeople function, this function should return all the people's information, then loop over the returned information and print each Person's information to the screen
// III. Add a log that logs when your script starts and ends and shows how long it took to execute

$time_start = microtime(true);

$host = "localhost";
$user = "admin";
$password = "";
$database = "divblox_training_db";

$conn = mysqli_connect($host, $user, $password, $database);

class Person
{
  private $id;
  private $firstName;
  private $surname;
  private $dateOfBirth;
  private $emailAddress;
  private $age;

  public function createPerson($firstName, $surname, $dateOfBirth, $emailAddress, $age)
  { 
    global $conn;
    $sqlCreateQuery = "INSERT INTO Person (FirstName, Surname, DateOfBirth, EmailAddress, Age) 
            VALUES ('$firstName', '$surname', '$dateOfBirth', '$emailAddress', $age)";

    $this->firstName = $firstName;
    $this->surname = $surname;
    $this->emailAddress = $emailAddress;
    $this->age = $age;
    $this->dateOfBirth = $dateOfBirth;
    return mysqli_query($conn, $sqlCreateQuery);
  }

  public function loadPerson($id)
  {
    //TODO: load person from database using id
  }

  public function savePerson()
  {
    //TODO: save changes to person in database
  }

  public function deletePerson()
  {
    //TODO: delete person from database
  }

  public function loadAllPeople()
  {
    //TODO: load all people from database
    global $conn;
    $sqlLoadQuery = "SELECT * FROM Person";
    $data = mysqli_query($conn, $sqlLoadQuery);
    $checkRows = mysqli_num_rows($data);
    if ($checkRows > 0) {
      while ($entry = mysqli_fetch_assoc($data)) {
        echo $entry['id'].$entry['FirstName'].$entry['Surname'].$entry['DateOfBirth'].$entry['EmailAddress'].$entry['Age']."</br>";
      }
    }
  }

  public function deleteAllPeople()
  {
    //TODO: delete all people from database
  }
}

//create a new Person
$person = new Person();

$firstNames = array("John", "Jane", "David", "Samantha", "Michael", "Emily", "Christopher", "Olivia", "Sophia", "William");
$surnames = array("Smith", "Johnson", "Williams", "Jones", "Brown", "Davis", "Miller", "Wilson", "Moore", "Taylor");
$dobs = array("1990-01-15", "1985-03-22", "1995-07-10", "1982-09-05", "1998-12-30", "1989-04-17", "1993-06-02", "1991-11-11", "1987-08-24", "1996-02-19");
$ages = array(31, 36, 26, 39, 23, 32, 28, 30, 34, 25);
$emails = array("john.smith@example.com", "jane.johnson@example.com", "david.williams@example.com", "samantha.jones@example.com", "michael.brown@example.com", "emily.davis@example.com", "chris.miller@example.com", "olivia.wilson@example.com", "sophia.moore@example.com", "william.taylor@example.com");

for ($i = 0; $i < 10; $i++) {
  $person->createPerson($firstNames[$i], $surnames[$i], $dobs[$i], $emails[$i], $ages[$i]);
}

$person->loadAllPeople();

$time_end = microtime(true);

$execution_time = ($time_end - $time_start) * 100;
echo '</br></br><b>Total Execution Time:</b> ' . $execution_time . '<b>ms</b>';
