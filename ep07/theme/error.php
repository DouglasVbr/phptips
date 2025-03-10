<?php $v->layout("_theme");?>

<di class="error">
    <h2>oooopppss, error<?= $error; ?>!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ea eius, excepturi mollitia neque nostrum odit quod totam unde! Ea?</p>

</di>

<?php $v->start("sidebar");?>
<a href="<?= url();?>" title="voltar ao inicio!">Voltar</a>
<?php $v->end();?>




