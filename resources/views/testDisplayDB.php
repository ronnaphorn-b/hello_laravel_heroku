<?php
    echo "Contacts <br>";
    echo "--------------------------------<br>";
    foreach($contacts as $contact){
        echo "Name : $contact->name <br>";
        echo "Phone : $contact->phone <br>";
        echo "Address : $contact->address <br>";
        echo "===============================<br>";
    }

?>