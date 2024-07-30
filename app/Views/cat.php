<?php foreach($dd as $cat): ?>

<a href="<?= $cat['category_name'] ?>/<?= $cat['name'] ?>" class="nj"><?= $cat['name'] ?></a>
<?php endforeach; ?>

