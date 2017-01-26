<div class="grid grid-pad">
    <div class="clearfix"></div>

    <!-- Projects-->

    <!-- 1 Arts & Publishing -->
    <div class="col-2-12 work">
        <!-- <div class="numberBig " id="uno">◓</div> -->
    </div>

    <div class="col-6-12" id="uno">
        <div class="specialFont" id="w">W</div>
        <div class="specialFont" id="o">O</div>
        <div class="specialFont" id="r">R</div>
        <div class="specialFont" id="k">K </div>
        <div class="specialFont" id="s">S </div>



    </div>
    <div class="clearfix"></div>


    <div class="col-2-12"></div>

    <div class="col-10-12">
        <ul class="projects">
            <div class="img"></div>


            <?php foreach($pages->projects()->find('work')->children() as $projectArt): ?>
            <li><a href="<?php echo $projectArt->url() ?>"><?php echo $projectArt->year()->html() ?> <span class="year"> &nbsp  &nbsp</span> <span class="title"><?php echo $projectArt->title()->html() ?> - <span class="type"> <?php echo $projectArt->type()->html() ?></span><div class="linkProject">
▶</div></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <!-- End Arts & Publishing -->

    <div class="clearfix"></div>




    <!-- Fin Projects -->




</div>
