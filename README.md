Fuel-Tasks-Testontest
=====================

The package for FuelPHP



Installing
----

add as submodule

    $git submodule add git@github.com:goosys/Fuel-Tasks-Testontest.git

show development's config 

    $vi fuel/app/config/development/config.php

and add below

    	'always_load'  => array(
    		'packages'  => array(
    			'testontest',
    		),
    	)

Usage
----

simply call the task

    oil r testontest

when you need some options, call like this:

    oil r testontest --group=Model
