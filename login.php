<?php
  if (isset($_POST['nome'])) {
       setcookie('nome' ,$_POST['nome']);
    }

    if (isset($_COOKIE['nome'])){
      echo "Vocẽ será direcionado para área ";
    }else{
      include 'login.html'
    }
    
    ?>
