<?php
/*
   @author : Prithviraj Bila
*/
   //disabbling errors :P
   ini_set('display_errors', '0');     # don't show any errors...
   error_reporting(E_ALL | E_STRICT);  # ...but do log them

   include_once("Google_Spreadsheet.php");
   // config.php contains
   // $user and $pass
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
      $slots = "";
      //for selecting multiples
      foreach ($_POST['slot'] as $slot)
      {
         $slots = $slots  . $slot ."," ;
      }
      // Do some error checking here if you want
      if (!is_numeric($room_no)) {
         echo '<div style="text-align:center"><p class="text-warning">Room number is supposed to be a number :( </p></div>';
      } else {
         // No errors, continue processing registration

         $row = array (
            "room_no" => $room_no
            , "roll_no" => $roll_no
            , "slot" => $slots
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
