
<form method="post" action="/update">
  
  <input type="hidden" name="id" value="<?= $user['id'] ?>">
  <input type="text" name="text" value="<?= $user['name'] ?>">
  <button type="submit">UPDATE</button>
  
</form>