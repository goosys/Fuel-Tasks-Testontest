<?php
namespace Fuel\Tasks;

/**
 * テスト環境でテストを実行
 */
class Testontest {

	public static function run() 
	{
		
		\Fuel::$env = \Fuel::TEST;
		
		$argv = self::_trim( $_SERVER['argv'] );
		
		self::init();
		
		\Oil\Command::init( array_merge( array('oil','test'), $argv ) );
		
	}
	
	protected static function init()
	{
	
		\Package::load('oil');
		
		ob_start();
		
		$_SERVER['argv'] = array('oil','r','migrate:down','--version=0');
		\Cli::set_option('version',0);
		\Oil\Command::init( $_SERVER['argv'] );
		
		$_SERVER['argv'] = array('oil','r','migrate');
		\Cli::set_option('version',null);
		\Oil\Command::init( $_SERVER['argv'] );
		
		ob_end_clean();
	
	}
	
	protected static function _trim( $argv )
	{
		$sp = explode('\\',get_class());
		$needle = strtolower( array_pop($sp) );
		
		$ii = array_search( $needle, $argv );
		array_splice( $argv, 0, $ii+1 );
		
		return $argv;
	}
	
}

