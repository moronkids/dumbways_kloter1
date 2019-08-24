<?php
/******************************************************************************
Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.
*******************************************************************************/
function email($email)
{
    if(preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email))
    {
        return "email valid";
    }
    else
    {
        return "email tidak valid";
    }
}
echo email('kukuruyuk@gmail.com');
echo "\n";
echo email('kukuruyuk@gmail');

echo "\n";
function username($username)
{
    if(preg_match("/[a-z]{8,8}$/", $username))
    {
        return "username valid";
    }
    else
    {
        return "username tidak valid";
    }
}
echo username('vladimir');
echo "\n";
echo username('vladimi');
echo "\n";

// password, harus terdapat huruf kecil, angka,
// dan huruf besar dan terdiri dari 8 karakter, selain itu invalid
function password($password)
{
    $whiteListed = "\$\@\#\^\|\!\~\=\+\-\_\.";
    if(preg_match_all("/^[#a-zA-Z0-9](?=.*[a-z])(?=.*[A-Z]){8,}/", $password))
    {
    return "password valid";
    }
    else
    {
    return "password tidak valid";
    }

}
echo password('jakarta7');
echo "\n";
echo password('jakartA7');
