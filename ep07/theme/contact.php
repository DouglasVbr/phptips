<?php $v->layout("_theme");?>

<div class="contact">
    <h2>Fale conosco!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, natus.</p>

    <form action="<?= url(url:"contact");?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu Nome:"/>
        <input type="email" name="email" placeholder="Seu Email:"/>
        <textarea name="message" placeholder="Mensagem" rows="3" ></textarea>



    </form>

</div>



