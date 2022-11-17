<?php

class User
{
    const SOME_CONST = 314;
}

user::SOME_CONST;
//user::SOME_CONST = 512; //error
echo user::SOME_CONST;
