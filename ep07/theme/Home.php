<?php $v->layout("_theme")?>
<di class="users">

    <?php if($users):
    foreach( $users as $user):
        ?>
    <article class="users_user">
        <h3><?=$user->first_name, "", $users->last_name;?></h3>

    </article>
    <?php
       endforeach;
    else:
    ?>
    <h4>98989e98re9ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</h4>
    <p>dfgvvvvvvvvvvvvvvvvvvvywwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>
    <?php
    endif;

    ?>
</di>




