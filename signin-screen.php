<?php require'build-components.php';?>
<?=getTemplate('header', ["page's title" => 'SocialNet - Sign In']);?>

<section class="container">

    <div class="box-table">

        <h1 class="text-light mb-4">Create Your Account</h1>

        <form action="account-register.php" method="POST">


            <label class="text-light">Name</label>
            <input class="form-control mb-3" type="text" name="name" placeholder="Ex.: Jhone Dough">

            <label class="text-light">Password</label>
            <input class="form-control mb-3" type="password" name="password" placeholder="Ex.: 12345">

            <label class="text-light">E-mail</label>
            <input class="form-control mb-3" type="email" name="email" placeholder="Ex.: email@dom.com">

            <button class="btn btn-outline-warning" type="submit">Sign In</button>



        </form>
    </div>

</section>


<?=getTemplate('footer')?>