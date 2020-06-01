<?php
    function isValid($email)
    {
        $domain = strtolower(substr($email, strpos($email, '@') + 1));
        $providers = ['gmail.com', 'hotmail.com', 'outlook.com', 'msn.com', 'outlook.sa', 'aol.com', 'protonmail.com'];
        $inarray = in_array($domain, $providers);
        return (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain) != false && $inarray);
    }
    
    if(isValid("root@gmail.com")){
      echo "This is a valid email";
    } else {
      echo "Please enter a valid email";
    }
?>
