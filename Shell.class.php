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
}
