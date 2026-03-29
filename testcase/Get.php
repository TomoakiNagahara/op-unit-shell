<?php
/**	op-unit-shell:/testcase/Get.php
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
namespace OP;

//	...
$command = 'ls';
$result = OP()->Unit()->Shell()->Get($command);
$error  = OP()->Unit()->Shell()->Error();
OP()->Unit()->Dump()->Auto([
	'command' => $command,
	'result'  => $result,
	'error'   => $error,
]);

//	...
if( $result !== "Error.php\nGet.php\nOut.php" ){
	OP()->Error('Result is not match.');
}

//	...
if( $error !== null ){
	OP()->Error('Error is not null.');
}
