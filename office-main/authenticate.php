<?php session_start();

// FIXME: PHP Form Validation (see the example under Validate Form Data With PHP)

// FIXME: get the username/password from the POST superglobal

// FIXME: 
// select password from users where username = '$uname'
// if no rows are returned (the username must not be in the table) 
//     show page below
// else 
//     compare $pwd to the password from the users table
//     if $pwd is good:
//         put the username into the session with a the key: 'user'
//         redirect browser to admin_menu.php
//     else show page below (don't give Mallory any clues)
//
// WARNING!
// Don't confuse the username (root) and password (empty string) for
// the MySQL database with the username/password from the form!!
?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.

        <a href="index.php">Homepage</a>
    </body>
</html>
