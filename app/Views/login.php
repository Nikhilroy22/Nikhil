<br>
<?php $session = session();
if ($session->getFlashdata('error')) : ?>

       <h2>   <?= $session->getFlashdata('error') ?> </h2>
         <?php endif; ?>
<form method="post" action="/login">
  <input type="password" name="password" placeholder="password">
  <button>Login</button></form>