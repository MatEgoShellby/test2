<?php

echo '<h1>Hello World!</h1>';

?>

<ul>
    <li>test 1</li>
    <li>test 2</li>
    <li>test 3</li>
<?php
    if (isset($_GET['p2'])) :
?>
    <li>test 4</li>
<?php endif; ?>
</ul>
