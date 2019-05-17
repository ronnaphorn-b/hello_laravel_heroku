<?php
    echo "Chats <br>";
    echo "===============================================<br>";
    foreach($chats as $chat){
        echo "Name : $chat->name <br>";
        echo "Display Name : $chat->line_display_name__c <br>";
        echo "Line UID : $chat->line_uid__c <br>";
        echo "External Test ID : $chat->external_test_id__c <br>";
        echo "-------------------------------------------<br>";
    }

?>