

<h1>admin</h1>
<?php
$session = session();
if ($session->get('id')) : ?>

       <h2>   <?= $session->get('username') ?> </h2>
       <h2>   <?= $session->get('password') ?> </h2>
<h1><a href="logout">Logout</a></h1>
       <?php endif; ?>