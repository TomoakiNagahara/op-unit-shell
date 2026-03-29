<?php
/**	op-unit-shell:/Shell.class.php
 *
 * @created    2026-03-29
 * @license    Apache-2.0
 * @package    op-unit-shell
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP\UNIT;

/**	Use
 *
 */
use OP\IF_SHELL;
use OP\OP_CORE;
use OP\OP_CI;

/**	Shell
 *
 * @created    2026-03-29
 */
class Shell implements IF_SHELL
{
	/**	Trait.
	 *
	 */
	use OP_CORE, OP_CI;

	/**	Store the error of the last executed command.
	 *
	 * @created    2026-03-29
	 * @var        string
	 */
	static $_error;

	/**	Automatically
	 *
	 * <pre>
	 * if(!$ls = OP()->Unit()->Shell('ls') ){
	 *     $error = OP()->Unit()->Shell()->Error();
	 * }
	 * </pre>
	 *
	 * @created    2026-03-29
	 * @param      string     $command
	 * @return     string|false
	 */
	static function Auto( string $command ) : string | false
	{
		return self::Get( $command );
	}

	/**	Get the result of execution command.
	 *
	 * Returns the result of the command execution.
	 *
	 * @created    2026-03-29
	 * @see        \OP\IF_SHELL
	 * @param      string     $command
	 * @return     string
	 */
	static function Get( string $command ) : string | false
	{
		//	Reset the error.
		self::$_error = null;

		/* @var $command string */
		/* @var $output  array  */
		/* @var $status  int    */
		exec("{$command} 2>&1", $output, $status);

		//	The $output of exec() an array.
		$result = join("\n", $output);

		//	The $status will be assigned to an error code.
		if( $status ){
			//	The result has been assigned an error.
			self::$_error = $result;
			$result = false;
		}

		//	Return the result.
		return $result;
	}
}
