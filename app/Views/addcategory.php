<br>
<?php if(session()->getFlashdata('category')): ?>
<?= session()->getFlashdata('category') ?>
<?php endif; ?>
<br>
<form method="post" action="/addpost">
  <input type="text" name="category" placeholder="add category">
  <button>Add</button>
  
</form>
<?php if(session()->getFlashdata('errors')): ?>
<?= session()->getFlashdata('errors') ?>
<?php endif; ?>
<br>