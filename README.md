Fuel-Tasks-Testontest
=====================

The package for FuelPHP

1. switch test environment
2. down all migrations
3. up all migrations
4. run test

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
