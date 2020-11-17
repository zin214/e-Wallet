<?php
  $name = $_POST['name'];
  $matricNo = $_POST['matricNo'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $citizenship = $_POST['citizenship'];
  $maritalStatus = $_POST['maritalStatus'];
  $religion = $_POST['religion'];
  $active = $_POST['active'];
  $currentYear = $_POST['currentYear'];
  $IdNo = $_POST['IdNo'];
  $email = $_POST['email'];


  echo $name;

  print "<br><br>" . $matricNo;


  if ($gender == "1")
  print "<br>Male";

  else {
  print "<br>Female";
  }

  print "<br>" . $dob;

  print "<br>" . $citizenship;

  if ($maritalStatus == "1")
  print "<br>Single";

  else {
  print "<br>Married";
  }

  print "<br>" . $religion;

  if ($active == "1")
  print "<br>Actice";

  else {
  print "<br>Non-Active";
  }

  print "<br>" . $currentYear;

  print "<br>" . $IdNo;

  print "<br>" . $email;






 ?>
