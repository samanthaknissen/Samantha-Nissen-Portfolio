<?php
/**
 * Template Name: Work
 */
?>

<?php
 get_header();
?>

  <div class="content-area">
    <?php if( get_field('work-image') ): ?>
      <div class="title">
        <h1>
      <?php the_field('title'); ?>
    </h1>
      </div>

      <div class="work-img-container">
<img src="http://localhost:8888/samantha-nissen/wp-content/uploads/2015/04/noel-nissen.jpg" />
      </div>
<?php endif; ?>
    <div class="sidebar">
      <h2>
        About the Project
      </h2>
      <div class="about">
      <?php the_field('about'); ?>
      </div>
      <h2>
        Project Details
      </h2>
        <div class="role">
      <h3>
        Role
      </h3>
      <?php the_field('role'); ?>
        </div>
        <div class="skills">
      <h3>
        Skills
      </h3>
      <?php the_field('skills'); ?>
        </div>
        <div class="client">
      <h3>
        Client
      </h3>
      <?php the_field('client'); ?>
        </div>
      <button class="pure-button">A Pure Button</button>
  </div>
</div>


<?php
 get_footer();
 ?>
