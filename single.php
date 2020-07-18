<?php get_header();?>

<?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
  ?>
<section class="bg-sec-title_news">
  <div class="container font-rubik my-5">
    <div class="row">
      <div class="col-9 py-5">
        <h2 class="font-weight-bold text-dark text-uppercase fz-40 position-relative titulo-news"><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
  

</section>

<section>
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-8">
        <div class="fz-18 content-news">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col-md-4">
          <div>
            <div class="font-rubik font-weight-bold text-center border border-gray-500 py-2 mb-4">ÚLTIMAS DO BLOG</div>
            <?php
              $news = new WP_Query(Array(
                "post_type" => "post",
                "posts_per_page" => 3
              ));

              if ($news->have_posts()) {
                while ($news->have_posts()) {
                  $news->the_post();
                  ?>
            <div class="mb-2">
              <div><a href="<?php the_permalink(); ?>" class="text-pink"><?php the_title(); ?></a></div>
              <span class="font-italic fz-14"><?php the_time('d') ?> de <?php the_time('F'); ?></span>
            </div>
                  <?php
                }
              }
            ?>
          </div>
        </div>
    </div>
  </div>
</section>
<?php 
 }
}

get_footer();
?>