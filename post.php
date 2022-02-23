<?php

    include_once("/xampp/htdocs/dashboard/blog-php/templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
        
        foreach($posts as $post ){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"> <?= $currentPost['description'] ?></p>
        
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?=$post['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, amet quia! Alias aliquid voluptatibus explicabo delectus suscipit facere quibusdam, voluptates quos, rem accusamus consequuntur, blanditiis voluptate perferendis quis dolorum nam!
            Perferendis facere ut error? Dolorem ipsam architecto dolorum minima voluptate quasi explicabo aut consequatur, iste quam unde, repudiandae voluptas totam id obcaecati tempore esse at vero amet culpa veniam corrupti.
            Itaque, praesentium. Est saepe ea mollitia itaque sunt corporis cumque, quod doloremque voluptatibus ut voluptatem earum! Blanditiis aut excepturi aliquam, impedit ratione quia qui expedita autem dolores, odit, repudiandae ipsam?
            Inventore autem voluptates labore illo laborum dignissimos magnam quisquam ex libero placeat laboriosam enim beatae, illum iusto neque, provident in tempora architecto sed totam necessitatibus et ipsa praesentium. Quidem, deserunt?
            Ex facilis rerum, blanditiis veniam laudantium labore ullam tenetur ad accusantium quia optio velit, aperiam quo nihil consectetur incidunt perspiciatis veritatis recusandae odit quidem minus! Consequatur nulla nemo possimus aliquam.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, amet quia! Alias aliquid voluptatibus explicabo delectus suscipit facere quibusdam, voluptates quos, rem accusamus consequuntur, blanditiis voluptate perferendis quis dolorum nam!
            Perferendis facere ut error? Dolorem ipsam architecto dolorum minima voluptate quasi explicabo aut consequatur, iste quam unde, repudiandae voluptas totam id obcaecati tempore esse at vero amet culpa veniam corrupti.
            Itaque, praesentium. Est saepe ea mollitia itaque sunt corporis cumque, quod doloremque voluptatibus ut voluptatem earum! Blanditiis aut excepturi aliquam, impedit ratione quia qui expedita autem dolores, odit, repudiandae ipsam?
            Inventore autem voluptates labore illo laborum dignissimos magnam quisquam ex libero placeat laboriosam enim beatae, illum iusto neque, provident in tempora architecto sed totam necessitatibus et ipsa praesentium. Quidem, deserunt?
            Ex facilis rerum, blanditiis veniam laudantium labore ullam tenetur ad accusantium quia optio velit, aperiam quo nihil consectetur incidunt perspiciatis veritatis recusandae odit quidem minus! Consequatur nulla nemo possimus aliquam.</p>

        </div>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
</main>
<?php 
    include_once("/xampp/htdocs/dashboard/blog-php/templates/footer.php");
?>