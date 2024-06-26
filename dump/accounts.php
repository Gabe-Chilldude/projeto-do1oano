<?php require 'build-components.php';?>
<?= getTemplate('header', ["page's title" => 'SocialNet - Accounts']);?>

<h1 class="text-light text-center mt-5 mb-5">Your user accounts</h1>

<section class="container">

<div class="box-table">

    <a href="#" class="btn btn-warning">+ add account</a>

    <table class="table table-dark table-borderless table-striped">
        <thead>
            <tr >
                <th>Number</th>
                <th>E-mail</th>
                <th>Name</th>
                <th>Cellphone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1011</td>
                <td>joseph@home.com</td>
                <td>joseph Ribeiro</td>
                <td>9923 2384</td>
                <?=getTemplate('button')?>
            </tr>

            <tr>
                <td>1234</td>
                <td>carl@luba.com</td>
                <td>Carls Scool</td>
                <td>9245 1248</td>
                <?=getTemplate('button')?>
            </tr>

            <tr>
                <td>2137</td>
                <td>naruto@gamer.net</td>
                <td>Julio dos Santos</td>
                <td>9218 1248</td>
                <?=getTemplate('button')?>
            </tr>
            <tr>
                <td>6012</td>
                <td>rei@delas.peg</td>
                <td>Estourador de Gatinhas</td>
                <td>9999 9999</td>
                <?=getTemplate('button')?>
            </tr>

        </tbody>
    </table>
    

</div>




</section>




<?= getTemplate('footer');?>