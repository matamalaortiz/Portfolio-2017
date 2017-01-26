<?php snippet('header') ?>

<div class="grid grid-pad">


    <div class="col-2-12 categories">
        <p class="medium"><a href="  <?php echo $site->url() ?>">Alejandro <br><br>
    Matamala O.</a></p><br><br><br><br>
        <p class="hi">(Hi.)</p>

    </div>
    <div class="col-6-12">
        <div class="medium">
            <?php echo $page->title()->kirbytext() ?>
        </div>
        <div class="categories">

        </div>
        <?php echo $page->text()->kirbytext() ?>

    </div>
    <!-- Categorias -->
    <div class="col-4-12 right categories">
        <ul>
            <p class="medium">Menu</p>


            <li><a href=" <?php echo $site->url() ?>">Works ◓</li></a>
                <li><a href="<?php echo $site->url() ?>/blog">Blog ◉  </li></a>
                    <li>
                        <a href="#credits">
                            <div class="number"><span class='category'> Credits</span> ⬣ </div>
                        </a>
                    </li>

                    <br><br><br><br>


        </ul>
    </div>
    <!-- Fin Categorias -->



    <div class="clearfix"></div>


</div>
</div>

<footer id="credits">
    <div class="col-2-12">

    </div>

    <div class="clearfix"></div>


</footer>


<?php snippet('footer') ?>

<?php snippet('footer') ?>
