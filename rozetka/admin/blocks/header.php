<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admin/css/admin.css">
</head>
<body>

<?php if(!(isset($_GET['action']) && $_GET['action'] === 'login')): ?>
<div class="admin-top-panel">
    <h3>Console</h3>
    <div class="admin-profile">
        <div class="name">
            <?php
                $user = $_SESSION['user'];
            ?>
            Hello <?= $user['name'] ?> <?= $user['last_name'] ?> (<?= $user['email'] ?>)
        </div>
        <a href="?logout">logout</a>
    </div>
</div>
<div class="admin-left-menu-wrap">
    <div class="admin-left-menu">
        <h5 class="js-open-modal" data-target="left-menu-sub-products">Products</h5>
        <ul class="admin-left-menu-sub list-unstyled" id="left-menu-sub-products">
            <li><a href="?action=products">Products list</a></li>
            <li><a href="?action=products-add">Add product</a></li>
        </ul>
    </div>
    <div class="admin-left-menu">
        <h5 class="js-open-modal" data-target="left-menu-sub-users">Users</h5>
        <ul class="admin-left-menu-sub list-unstyled" id="left-menu-sub-users">
            <li><a href="?action=users">Users list</a></li>
            <li><a href="?action=users-add">Add user</a></li>
        </ul>
    </div>
</div>
<?php endif ?>
<div class="admin-main-content">