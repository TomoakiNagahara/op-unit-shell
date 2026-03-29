<?php
/**	op-unit-shell:/testcase/Error.php
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
$comand = 'mkdir test';

//	...
$result = OP()->Unit()->Shell()->Get($comand);
OP()->Unit()->Dump()->Auto([
	'Get()'=>[
		'command' => 'mkdir test',
		'result'  => $result,
		'error'   => OP()->Unit()->Shell()->Error(),
	],
]);

//	...
$result = OP()->Unit()->Shell()->Out($comand);
OP()->Unit()->Dump()->Auto([
	'Out()'=>[
		'command' => 'mkdir test',
		'result'  => $result,
		'error'   => OP()->Unit()->Shell()->Error(),
	],
]);
