<?php
    echo "Contacts \n";
    echo "--------------------------------";
    foreach($contacts as $contact){
        echo "Name : $contact->name \n";
        echo "Phone : $contact->phone \n";
        echo "Address : $contact->address \n";
        echo "===============================";
    }

?>