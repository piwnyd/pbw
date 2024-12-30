<?php
    echo md5('123'.rand().date("h:i:s"));
    echo "<br>";
    echo sha1('123');
    echo "<br>";
    echo password_hash('123',PASSWORD_DEFAULT);
    echo "<br>";
    echo password_verify('123','$2y$10$8Pp/KQSm3PyMWdRW1XmFIOkaZCeSkaOOxHj2k3uTtFJtbvWDt75HO');
