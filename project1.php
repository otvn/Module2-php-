<?php
  $name1 ="";
   $phone1="";
   $name2="";
 $phone2="";
while (true) {
   echo "===Contact Number===\n";
   echo "1.Add Contact\n";
   echo "2.View Contact\n";
   echo "3.Exit\n";
   echo "Enter your choice: ";
   $choice =fgets(STDIN);
 

   if ($choice == 1){
    if($name1 == "" || $phone1 == ""){
        echo "Please Enter the name for contact1: ";
        $name1 = fgets(STDIN);
        echo "Please Enter the Phone Number for contact1: ";
        $phone1 = fgets(STDIN);
      echo "Contact added successfully!\n";
        }
  
 
    
    elseif($name2 == "" || $phone2 == ""){
        echo "Please Enter the name for contact2: ";
        $name2 = fgets(STDIN);
        echo "Please Enter the Phone Number for contact2: ";
        $phone2 = fgets(STDIN);
        echo "Contact added successfully!\n";
}
else{
    echo "Contact already exists!\n";
}
}
elseif ($choice == 2) {
    if ($name1 != "" || $phone1 != "") { 
        echo "Contact 1: Name: $name1, Phone Number: $phone1\n";
    }
    if ($name2 != "" || $phone2 != "") {  
        echo "Contact 2: Name: $name2, Phone Number: $phone2\n";
    }
    if (($name1 == "" || $phone1 == "") && ($name2 == "" || $phone2 == "")) {
        echo "No contacts available.\n";  
    }
}

   elseif ($choice == 3){
       echo "Exiting...\n";
       break;
   }
   else{
       echo "Invalid choice, please try again.\n";
   }
}
?>