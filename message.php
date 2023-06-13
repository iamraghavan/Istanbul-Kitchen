<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $date = htmlspecialchars($_POST['date']);
  $message = htmlspecialchars($_POST['message']);
  $time = htmlspecialchars($_POST['time']);
  $people = htmlspecialchars($_POST['people']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "developer.raghavan@gamil.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nTime: $time\nNo of Peoples: $people\nPhone: $phone\ndate: $date\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>

