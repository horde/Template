--TEST--
Associative Array Test
--FILE--
<?php

if (defined('E_DEPRECATED')) {
    error_reporting(error_reporting() & ~E_DEPRECATED);
}

require dirname(__FILE__) . '/../../../lib/Horde/Template.php';
$template = new Horde_Template(dirname(__FILE__));
$template->set('foo', array('one' => 'one', 'two' => 2));
echo $template->fetch('/array_assoc.html');

?>
--EXPECT--
one 2 <tag:foo />
