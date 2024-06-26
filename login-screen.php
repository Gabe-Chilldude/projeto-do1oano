<?php require './build-components.php';?>
<?= getTemplate("header", ["page's title" => 'SocialNet - Login']); ?>
    <section class="container " id="login">
            <form action="login.php" method="post" class="login-form">

                <h1 class="text-light">Account Login</h1>
                <label class="text-light">E-mail</label> 
                <input class="form-control mb-3" name="email" type="email" placeholder="Insert Your Email here"> 

                        
                <label class="text-light">Password</label> 
                <input class="form-control mb-3" name="password" type="password" placeholder="Insert Your Password here "> 
                        
                <button type="submit" class="btn btn-login btn-outline-warning">Login</button>

                <a href="signin-screen.php" class="text-warning">Doesn't have a account?</a>

            </form>
    </section>
<?= getTemplate('footer');?>