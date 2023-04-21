<?php 
$FltTimeStart = microtime(true);

$StrHost = "localhost";
$StrUser = "admin";
$MixedPassword = "";
$StrDatabase = "divblox_training_db";

$MixedConn = mysqli_connect($StrHost, $StrUser, $MixedPassword, $StrDatabase);

class Person {
  private $id;
  private $firstName;
  private $surname;
  private $dateOfBirth;
  private $emailAddress;
  private $age;
  function __construct()  {
  }
  public function createPerson($firstName, $surname, $dateOfBirth, $emailAddress, $age)  {
    //create a new person
    global $MixedConn;
    $SqlCreateQuery = "INSERT INTO Person (FirstName, Surname, DateOfBirth, EmailAddress, Age) 
            VALUES ('$firstName', '$surname', '$dateOfBirth', '$emailAddress', $age)";

    $this->firstName = $firstName;
    $this->surname = $surname;
    $this->emailAddress = $emailAddress;
    $this->age = $age;
    $this->dateOfBirth = $dateOfBirth;
    return mysqli_query($MixedConn, $SqlCreateQuery);
  }

  public function loadPerson($id)  {
    //load person from database using id
    global $MixedConn;
    $SqlLoadQuery = "SELECT * FROM Person WHERE id = $id";
    $MixedData = mysqli_query($MixedConn, $SqlLoadQuery);
    $entry = mysqli_fetch_assoc($MixedData);
    echo $entry['id'] . $entry['FirstName'] . $entry['Surname'] . $entry['DateOfBirth'] . $entry['EmailAddress'] . $entry['Age'] . "</br>";
  }

  public function savePerson()  {
    //TODO: save changes to person in database
  }

  public function deletePerson($id)  {
    //delete person from database
    global $MixedConn;
    $SqlLoadQuery = "DELETE FROM Person WHERE id = $id";
    return mysqli_query($MixedConn, $SqlLoadQuery);
  }

  public function loadAllPeople()  {
    //load all people from database
    global $MixedConn;
    $SqlLoadQuery = "SELECT * FROM Person";
    $MixedData = mysqli_query($MixedConn, $SqlLoadQuery);
    $checkRows = mysqli_num_rows($MixedData);
    if ($checkRows > 0) {
      while ($entry = mysqli_fetch_assoc($MixedData)) {
        echo $entry['id'] . $entry['FirstName'] . $entry['Surname'] . $entry['DateOfBirth'] . $entry['EmailAddress'] . $entry['Age'] . "</br>";
      }
    }
  }

  public function deleteAllPeople()  {
    //delete all people from database
    global $MixedConn;
    $SqlDeleteAllQuery = "DELETE FROM Person;";
    return mysqli_query($MixedConn, $SqlDeleteAllQuery);
  }
}

//create a new Person
$person = new Person();

// $ArrFirstNames = array("John", "Jane", "David", "Samantha", "Michael", "Emily", "Christopher", "Olivia", "Sophia", "William");
// $ArrSurnames = array("Smith", "Johnson", "Williams", "Jones", "Brown", "Davis", "Miller", "Wilson", "Moore", "Taylor");
// $ArrDateOfBrithDates = array("1990-01-15", "1985-03-22", "1995-07-10", "1982-09-05", "1998-12-30", "1989-04-17", "1993-06-02", "1991-11-11", "1987-08-24", "1996-02-19");
// $ArrAges = array(31, 36, 26, 39, 23, 32, 28, 30, 34, 25);
// $ArrEmails = array("john.smith@example.com", "jane.johnson@example.com", "david.williams@example.com", "samantha.jones@example.com", "michael.brown@example.com", "emily.davis@example.com", "chris.miller@example.com", "olivia.wilson@example.com", "sophia.moore@example.com", "william.taylor@example.com");

// for ($IntIndex = 0; $IntIndex < 10; $IntIndex++) {
//   $person->createPerson($ArrFirstNames[$IntIndex], $ArrSurnames[$IntIndex], $ArrDateOfBrithDates[$IntIndex], $ArrEmails[$IntIndex], $ArrAges[$IntIndex]);
// }

$person->loadPerson(56);

$FltTimeEnd = microtime(true);

$FltExecutionTime = ($FltTimeEnd - $FltTimeStart) * 100;
echo '</br></br><b>Total Execution Time:</b> ' . $FltExecutionTime . '<b>ms</b>';

?>