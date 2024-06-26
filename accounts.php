<?php require 'build-account-table.php';
    require 'build-components.php';?>
<?=getTemplate('header', ["page's title" => 'SocialNet - Accounts']);?>

    <section class="container">

        <h1 class="text-light text-center mb-4">Your Users Accounts</h1>

        <div class="box-table">
            <a href="signin-screen.php" class="btn btn-warning mb-2">+ Add Account</a>
            <a href="login.php" class="text-warning">Logout</a>
            <?=arrayToTable(csvToArray('db/accounts.csv'), ['Passwords', 'E-mail', 'Name']);?>
        </div>
    </section>

<?=getTemplate('footer');?>