<div style="margin-top: 100px; border-radius: 20px;" class="container">
    <div class="row">


        <?php
            echo '<img style="border-radius: 80px 0px 0px 80px;" class="img-fluid col-md-6 col-sm-6 col-12 " src="http://localhost/wordpress/wp-content/uploads/2022/09/joinUs.png"/>'
        ?>

        <div style="border-radius: 0px 10px 10px 0px; padding: 40px;" class="col-md-6 col-sm-6 col-12">

            <?php

                $id=242; // identifiant de la page

                $post = get_post($id);

                $content = apply_filters('the_content', $post->post_content);
                $title = apply_filters('the_title', $post->post_title);



            ?>

            <h3 style=" color:#88A4E3; margin-bottom: 2rem;">
                <?php echo $title; ?>
            </h3>

            <?php
                echo $content;
            ?>

            <a href="<?php bloginfo('url'); ?>/?page_id=5">
                <button>
                    Postuler à nos offres <i class="fa-solid fa-chevron-right"></i>  
                </button>
            </a>


        </div>
    </div>
</div>