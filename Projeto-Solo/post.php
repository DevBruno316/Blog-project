<?php

include_once("templates/header.php");

if(isset($_GET['id'])){
    $postID= $_GET['id'];
    $currentPost;

    foreach($posts as $post){

        if($post['id'] == $postID){
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">

<div class="content-container">
<h1 id="main-title"><?= $currentPost['title']?></h1>
<p  id="post-description"><?= $currentPost['description']?></p>
<div class="img-container">
    <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img']?>" alt="" class="post-image">
</div>
<p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ut ea itaque, reprehenderit iste aperiam aut sunt ipsam nulla maxime accusamus quis quos excepturi ipsa quia! Deserunt aliquid similique repellendus!
Culpa beatae voluptatem recusandae omnis nostrum corrupti ab nesciunt voluptate, magni iure quis aperiam officiis iste ad reiciendis ex numquam dicta dolore totam rerum, explicabo odio ea? Quas, fugiat quos?
Accusamus, laboriosam? Nobis voluptate expedita voluptatem quo molestias, quisquam asperiores facilis autem esse vero totam nulla minus, consequuntur odit! Eaque doloribus provident nostrum deleniti incidunt ex, doloremque alias quidem error.
Corrupti quae aliquid temporibus non alias unde, impedit ipsam deserunt omnis est aut debitis, nemo ipsum. Quibusdam dolorum similique doloremque expedita ducimus laudantium laborum illum recusandae necessitatibus, saepe iure minima?
Voluptatem nam, velit pariatur consectetur, doloremque error unde delectus fugiat maxime omnis dolores vitae quibusdam illum molestias? Nulla deserunt libero sed eum quisquam numquam. Explicabo doloremque beatae officia tempora alias.</p>
<p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta illum velit natus? Magni excepturi recusandae quae iure, temporibus ipsum saepe nihil modi adipisci hic eaque! Optio nisi quidem beatae exercitationem.
Optio labore fugit, laboriosam cumque temporibus vel rerum nemo? Beatae, similique unde architecto quis iure tenetur obcaecati odio est eos sit asperiores dolorem praesentium consequuntur libero suscipit. Voluptatum, similique debitis?
Impedit autem ea accusamus tempora sapiente natus recusandae quaerat distinctio aperiam, tempore amet voluptates totam incidunt, corrupti ullam iste rem nemo dolor. Consequatur velit molestias ea vero repellendus, saepe doloribus.
Doloremque a ducimus illum iusto quos placeat optio. Dignissimos laudantium ut non, rem illo voluptatem, maxime, incidunt asperiores quia minima maiores adipisci quam possimus. Odit est suscipit ipsa amet tempora.
Ullam accusantium cumque dolores officiis repellendus, architecto optio laboriosam accusamus blanditiis alias quod voluptas aliquid sapiente magnam a? Quam odit veniam culpa saepe alias expedita fugiat aperiam quos quae eligendi.</p>
</div>



<aside  id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul id="tag-list">
    <?php foreach($currentPost['tags'] as $tag):?>
    <a href="#" class="post-tag"><?=$tag?></a>
    <?php endforeach;?>
    </ul>
    
    <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $categoria): ?>
          <li><a href="#"><?= $categoria ?></a></li>
        <?php endforeach; ?>
      </ul>
</aside>
     
</main>
<?php

include_once("templates/footer.php")

?>