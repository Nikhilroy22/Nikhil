 <?php foreach($users as $user): ?>
      <h1>   <a href="/<?= $user['category_name'];  ?> /<?= $user['name'];  ?>">
           <?= $user['name'];  ?>
         </a></h1>
        <?php endforeach; ?> 

     <!-- Paginate --> 
   
    <h1>   <?= $pager->links() ?> </h1>
     
