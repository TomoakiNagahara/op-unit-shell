<?php
/**	op-unit-shell:/ci/Shell/Error.php
 *
 * @created    2026-03-30
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
namespace OP;

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	Positive
$result = null;
$args   = null;
$ci->Set($method, $result, $args);

/* The error depends on the shell.
//	Cause an error.
$prepare = function(){
	OP()->Unit()->Shell()->Get('cd hogehoge');
};
$result = 'bash: cd: hogehoge: No such file or directory';
$args   =  null;
$ci->Set($method, $result, $args, $prepare);
*/
