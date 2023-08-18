<?php
    include_once("templates/header.php");

    if (isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            $currentPost = $post;
        }
        
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia necessitatibus iste dicta nihil, dolorum nisi quae nulla repudiandae accusamus assumenda eos eaque rerum repellendus, sequi neque! Voluptas commodi at eveniet?
                Officiis perspiciatis, ratione cum eius repellendus ducimus fugiat numquam cumque tenetur odit! Perferendis ipsum eius exercitationem repellendus? Ab, debitis? Sapiente at doloremque praesentium architecto excepturi adipisci temporibus obcaecati omnis quaerat!
                Tenetur nesciunt rem, beatae nemo eaque optio aliquam sed nam unde deserunt, totam praesentium, blanditiis quo modi quisquam molestiae in fugit. Tempora hic aspernatur animi, recusandae repellat aperiam harum illum.
                Laboriosam eligendi exercitationem at omnis illo? Voluptas sed blanditiis quo in suscipit nihil ab, officia natus velit, possimus error totam ipsa molestias placeat commodi iste assumenda consectetur temporibus nobis? Odit?
                Dolore consectetur reprehenderit laudantium eius minima esse voluptas nostrum, quo laboriosam tempora veniam doloremque dignissimos rem ipsum eveniet quas error, quod maxime molestias? Laborum omnis commodi quo, incidunt unde perspiciatis!
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia necessitatibus iste dicta nihil, dolorum nisi quae nulla repudiandae accusamus assumenda eos eaque rerum repellendus, sequi neque! Voluptas commodi at eveniet?
                Officiis perspiciatis, ratione cum eius repellendus ducimus fugiat numquam cumque tenetur odit! Perferendis ipsum eius exercitationem repellendus? Ab, debitis? Sapiente at doloremque praesentium architecto excepturi adipisci temporibus obcaecati omnis quaerat!
                Tenetur nesciunt rem, beatae nemo eaque optio aliquam sed nam unde deserunt, totam praesentium, blanditiis quo modi quisquam molestiae in fugit. Tempora hic aspernatur animi, recusandae repellat aperiam harum illum.
                Laboriosam eligendi exercitationem at omnis illo? Voluptas sed blanditiis quo in suscipit nihil ab, officia natus velit, possimus error totam ipsa molestias placeat commodi iste assumenda consectetur temporibus nobis? Odit?
                Dolore consectetur reprehenderit laudantium eius minima esse voluptas nostrum, quo laboriosam tempora veniam doloremque dignissimos rem ipsum eveniet quas error, quod maxime molestias? Laborum omnis commodi quo, incidunt unde perspiciatis!
            </p>
        </div>    
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach ($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>
