<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid aboutbg text-center">
    <div class="container">
        <h2> GAMES &amp; LEVEL DESIGNER </h2>
        <p class="particle">...and particle wizard</p>
        <p class="about-text">My name is josh Whitkin. I’m a professional with more than 7 years of industry experience in <span class="colourp">Games Design,</span> <span class="colouro">Level design, </span> <span class="colourp">Scripting</span> and <span class="colouro"> Visual Effects.</span> What makes me passionate about games is the combination of technology and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.I always tell a story.</p>
        <div class="blocker"></div>
    </div><!--  container-->
</section>
<section class="container-fluid ">
    <div class="container">
        <div class="row">
            <!--  a row that gives us access to the BS columns-->
            <div class="article-title text-center">
                <h3>LATEST ARTICLES</h3>
            </div>
            <div class="col-md-4 article-cent">
                <?php $post_id = 6;
$queried_post = get_post($post_id);?>
                <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
                <h4><?php echo $queried_post->post_title; ?></h4>
                <?php echo $queried_post->post_excerpt; ?>
            </div>
            <div class="col-md-4 article-cent">
                <img class="img-responsive" alt=“portait” src="http://206.189.45.97/~mesh13/wp-content/themes/josh_website_final/images/2.jpg">
                <h4>A MODEL</h4>
                <p class="date">12 December 2020</p>
                <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                </p>
                <p class="readmore">CONTINUE READING</p>
            </div>
            <div class="col-md-4 article-cent">
                <img class="img-responsive" alt=“portait” src="http://206.189.45.97/~mesh13/wp-content/themes/josh_website_final/images/3.jpg">
                <h4>A GAMES DESIGN</h4>
                <p class="date">12 December 2020</p>
                <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                </p>
                <p class="readmo re">CONTINUE READING</p>
            </div>
        </div><!-- row-->
    </div><!-- container-->
</section><!-- container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>