<?php
/**	op-unit-shell:/ci/Shell/Out.php
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
$args   = 'ls ci/test/';
$result =  true;
$ci->Set($method, $result, $args);
