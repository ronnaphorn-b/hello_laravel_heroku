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

    $testQuery_1 = DB::update('update salesforce.chat__c set external_test_id__c = ? where line_display_name__c = ?', ['8888123456712','Best']);
    $testQuery_2 = DB::table('salesforce.chat__c')
                        ->where('line_display_name__c', 'Test-Insert')
                        ->update(['external_test_id__c' => '00000000002']);

?>