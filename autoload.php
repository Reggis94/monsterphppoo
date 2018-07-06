<?php
function autoLoad($classe)
{
  require 'classes/'. $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('autoload');