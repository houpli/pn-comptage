<pre>
<?php

$test = array ('test' => 'aaaa', 'test2' => array (1,2,3,4), 'test3' => array('a'=>'b', 'c'=>'d'));

$json = json_encode($test);

$decode= json_decode($json);

print_r($decode);

?>
</pre>