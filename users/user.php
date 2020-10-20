<?php global $current_user;
      get_currentuserinfo();

      echo 'Username: ' . $current_user->user_login . "\n";
      echo 'User email: ' . $current_user->user_email . "\n";
      echo 'User level: ' . $current_user->user_level . "\n";
      echo 'User first name: ' . $current_user->user_firstname . "\n";
      echo 'User last name: ' . $current_user->user_lastname . "\n";
      echo 'User display name: ' . $current_user->display_name . "\n";
      echo 'User ID: ' . $current_user->ID . "\n";
?>


<a href="<?php bloginfo('url'); ?>/wp-login.php">Login</a>


//mostrar usuario logado
<div class="nameUser">
    <?php if ( $user_ID ) { ?>
        <a href="minha-conta/">
        <?php global $current_user;
        get_currentuserinfo();
  
        echo $current_user->user_login;
      
  ?>
</a>
    <?php } else {   ?>