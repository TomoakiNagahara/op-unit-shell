<?php
/**	op-unit-shell:/testcase/Out.php
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
$result  = OP()->Unit()->Shell()->Out($command);
$error   = OP()->Unit()->Shell()->Error();
OP()->Unit()->Dump()->Auto([
	'command' => $command,
	'result'  => $result,
	'error'   => $error,
]);

//	...
if( $result !== true ){
	OP()->Error('Result is not true.');
}

//	...
if( $error !== null ){
	OP()->Error('Error is not null.');
}
