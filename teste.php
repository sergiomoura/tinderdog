<?php 

    $user = new User();
    $user->name = "Lívia";
    $user->save();

    $dog = Dog::find(1);
    
    foreach($m as $dog->messages){
        echo($m->text . '-' . $m->text);
    }

    $dog->likes = ["cachorros que ela curtiu"];
    
    $dog->likesMe;

    $dog->messagesForMe = ["array de mensagens escritas para mim"];
    $dog->messagesByMe = ["array de mensagens escritas por mim"];

    $message->sender = ["dog QUE ESCREVEU"];
    $message->recipient = ["dog destinatário da msg"];


?>