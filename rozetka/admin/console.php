<?php
    $user = $_SESSION['user'];
    // pa($user);
?>
<h1>Admin console</h1>
<p>
    Hello <?= $user['name'] ?> <?= $user['last_name'] ?> (<?= $user['email'] ?>)
</p>