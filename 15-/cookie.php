<?php

    $cookie_name = 'user';
    $cookie_value = 'fathir';

    setcookie($cookie_name, $cookie_value);
    

    $cookie_value = 'nizam';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);

    echo '</br>';

    var_dump($_COOKIE);


?>