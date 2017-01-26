<?php snippet('header') ?>

<div class="grid grid-pad">

    <div class="col-2-12 categories projectPage">
        <p class="medium am"><a href="  <?php echo $site->url() ?>">Alejandro <br><br>
    Matamala O.</a></p><br><br><br><br><br><br><br><br><br><br>
        <span class="hi"> (Hi.)</span>


    </div>
    <div class="col-7-12">
        <h5> / <?php echo $page->title()->html() ?> /  <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.Y ') ?></time></h5>
        <div class="main-gallery">



            <?php foreach($page->images() as $image): ?>

            <img src="<?php echo $image->url()?>" class="imgBlog" alt="">

            <?php endforeach ?>

        </div>
        <div class="categories">

        </div>
        <div class="textProduct">
            <?php echo $page->text()->kirbytext() ?>
            <br><br><br>


        </div>

        <div class="indexBtn">
            <a href=" <?php echo $site->url() ?>">Index </a>
        </div>

    </div>
    <!-- Categorias -->
    <div class="col-3-12 right categories menuArticle">
        <ul>
            <p class="medium">Menu</p>

            <li>
                <a href="<?php echo $site->url() ?>">
                    <div class="number"><span class='category'> Works</span> </div>
                </a>
            </li>
            <li><a href="<?php echo $site->url() ?>/blog">Blog </li></a><br>
                <li>
                    <a href="#colophon">
                        <div class="number"><span class='category'> Contact </span></div>
                    </a>
                </li>



        </ul>
    </div>


    <!-- Fin Categorias -->

    <div class="clearfix"></div>

    <!-- Projects-->






</div>
</div>



<?php snippet('footer') ?>
