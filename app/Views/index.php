<?php
$session = session();
if ($session->get('id')) : ?>
<h2><a href="admin"><?= $session->get('username') ?></a></h2>
    
       <?php else: ?>
 
 <h2><a href="login">Login</a></h2>
       <?php endif; ?>
 
<pre>Nikhil</pre>

<h1 class="jj">RECENT POSTS</h1>
<?php foreach($mm as $nn): ?>
<div class="post">
  
<a href="<?= $nn['category_name'] ?>/<?= $nn['name'] ?>" class="nj"><?= $nn['name'] ?></a> <p><?= $nn['created_at'] ?></p>
<a href="<?='delete/'.$nn['name'] ?>" class="nj">Delete</a>
</div>
<?php endforeach; ?>
<?php if(isset($mm) && count($mm) <= 0): ?>
    <center><small class="text-muted"><i>No post has been published yet.</i></small></center>
<?php endif; ?>
<h1 class="jj">RECENT CATEGORYS</h1>

<?php if ($session->getFlashdata('del')) : ?>
<h2><?= $session->getFlashdata('del') ?></h2>
 
       <?php endif; ?>

<?php foreach($cats as $cat): ?>

<a href="<?= $cat['name'] ?>" class="nj"><?= $cat['name'] ?></a>
<a href="<?= 'edit/'.$cat['id'] ?>" class="nj">edit</a>

<a href="<?='delete/'.$cat['name'] ?>" class="nj">Delete</a>
<?php endforeach; ?>