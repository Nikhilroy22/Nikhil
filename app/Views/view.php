

<br>
<br>
<h1><a href="/">Home</a>-><a href="/<?= $puja['category_name'] ?>">
  
  <?= $puja['category_name'] ?>
</a>
</h1>
<?php 
$kk = 'jpg';
$pp = 'jpeg';
if(   $puja['type'] == $kk ): ?>
<?= $puja['name'] ?>
<br>
<img src="/<?= 'sdcard/'.$puja['category_name'].'/'.$puja['name']?>" height="80" width="80"></img>

 

<?php endif; ?>
<h1>nikhil</h1>
