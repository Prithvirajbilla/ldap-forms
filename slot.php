<?php
//disabbling errors :P
   ini_set('display_errors', '0');     # don't show any errors...
   error_reporting(E_ALL | E_STRICT);  # ...but do log them

   include_once("Google_Spreadsheet.php");
   include_once("config.php");
   $ss = new Google_Spreadsheet($user, $pass);
   $ss->useWorksheet("Sheet1");
   $ss->useSpreadsheet("slot allotment");
   //default value for submitted
   $submitted = 0;
   if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $submitted = $_POST['submitted'];
   }
   if ($submitted == 1) {
      $room_no = $_POST['room_no'];
      $roll_no = $_POST['roll_no'];
      $slot = $_POST['slot'];
      echo $slot ;

      // Do some error checking here if you want
      if (!is_numeric($room_no)) {
         echo "<h3><font color='red'>Room number is supposed to be a number :( </font></h3>";
      } else {
         // No errors, continue processing registration

         $row = array (
            "room_no" => $room_no
            , "roll_no" => $roll_no
            , "slot" => $slot
         );

         if ($ss->addRow($row)) {
            // Display success page here

            echo "<h1>Thanks for registering!</h1>";

            // Send a confirmation email here if you want
         } else {
            // Failed to write to the spreadsheet
            echo "<h1>Sorry there was an error processing your request.</h1>";
         }
      }
   }
?>
