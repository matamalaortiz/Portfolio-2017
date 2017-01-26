<?php snippet('header') ?>

<div class="grid grid-pad">

    <div class="col-2-12 categories projectPage">
        <p class="medium am"><a href="  <?php echo $site->url() ?>">Alejandro <br><br>
    Matamala O.</a></p><br><br><br><br>
        <p class="hi"> (Hi.)</p>
    </div>

    <div class="col-6-12">
        <div class="medium">
            <?php echo $page->title()->kirbytext() ?>
        </div>
        <div class="categories"></div>

        <div class="textProduct">
            <?php echo $page->textproject()->kirbytext() ?>
        </div>

        <ul>
            <li>
                <div class="number"><span class='category'>   <?php echo $page->year()->html() ?> </span> <span class='category'>– <?php echo $page->type()->html() ?></span> –
                    <?php echo $page->role()->html() ?>
                </div>
            </li>
        </ul>
    </div>

    <!-- Categorias -->
    <div class="col-4-12 right categories">

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

                <br><br><br>


        </ul>
    </div>


    <!-- Fin Categorias -->

    <div class="clearfix"></div>

    <!-- Projects-->

    <div class="main-gallery">

        <?php foreach($page->images() as $image): ?>

        <div>
            <img class="imgProjectNew" src="<?php echo $image->url() ?>" />
        </div>

        <?php endforeach ?>

        <div class="video">
            <?php echo $page->video()->html() ?>

        </div>







    </div>
</div>

<div class="clearfix"></div>


<!-- </footer> -->


<?php snippet('footer') ?>
