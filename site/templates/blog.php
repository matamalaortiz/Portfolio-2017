<?php snippet('header') ?>

<div class="grid grid-pad">


    <div class="col-2-12 categories">
        <p class="medium am"><a href="  <?php echo $site->url() ?>">Alejandro <br><br>
    Matamala O.</a></p><br><br><br><br>
        <p class="hi">(Hi.)</p>

    </div>
    <div class="col-8-12">
        <div class="specialFont" id="b">B</div>
        <div class="specialFont" id="l">L</div>
        <div class="specialFont" id="oo">O</div>
        <div class="specialFont" id="g">G </div>
        <br><br><br> <br>



        <div class="categories">

        </div>
        <section class="content blog">

            <?php echo $page->text()->kirbytext() ?>

            <?php foreach($page->children()->visible()->flip() as $article): ?>

            <article>
                <h5> / <?php echo $article->title()->html() ?> /  <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('d.m.Y ') ?></time></h5>

                <?php if ($article->images() != ''): ?>
                <img src="<?php echo $article->images()->first()->url() ?>" class="imgBlog" alt="">
                <?php endif ?>
                <?php if ($article->text() != ''): ?>
                <p class="textProduct">
                    <?php echo $article->text()->excerpt(300) ?> <a href="<?php echo $article->url() ?>" class="More">[More +]</a></p>
                <?php endif ?>
                <?php if ($article->quote() != ''): ?>
                <div class="quote">
                    <?php echo $article->quote()->kt() ?>
                </div>
                <em><?php echo $article->fuente()->kt() ?></em>
                <?php endif ?>

            </article>

            <?php endforeach ?>

        </section>

    </div>
    <!-- Categorias -->
    <div class="col-2-12 right categories">
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

                <br><br><br><br>


        </ul>
    </div>

</div>


<?php snippet('footer') ?>
