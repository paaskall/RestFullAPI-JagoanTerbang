<?php


namespace App\Enums;

enum RegisterStatus:string
{
    case register = 'Register';
    case ON_PROGRES = 'On Progres';
    case done = 'Done';
}
