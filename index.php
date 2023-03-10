<?php

  include("Email.php");

  $c = new CI_Email();

  $c->from("FromUserName@foobar.com");
  $c->to("user_to_receive_email@gmail.com");
  $c->subject("Celestial Temple");
  $c->message("Dominion reinforcements on the way.");
  $c->send();
  echo "done";
?>