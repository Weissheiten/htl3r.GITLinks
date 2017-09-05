<?php

echo output("Hello awesome people!",
    "--",
    "--"
);

function output($mystring, $wrapfront, $wrapback) : string
{
    return $wrapfront.$mystring.$wrapback;
}