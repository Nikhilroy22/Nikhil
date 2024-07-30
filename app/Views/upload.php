<br>
<?php if(session()->getFlashdata('upload')): ?>
<?= session()->getFlashdata('upload') ?>
<?php endif; ?>
<br>
<form method="post" action="postupload" enctype="multipart/form-data">
  <label>Category</label>
                    <select name="category">
                          <option value="uncategory">select category</option>
                        <?php foreach($categories as $row): ?>
                            <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                        <?php endforeach; ?>
                    </select>

  <input type="file" name="file">
  <button>Upload</button>
  </form>
  