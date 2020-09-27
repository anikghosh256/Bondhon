<?php
  get_header();
?>

<!--showcase area-->
<?php if ( true == get_theme_mod( 'bondhon_show_showcase', true ) ) : ?>
  
  <div class="parallax-container valign-wrapper showcase_back" style="min-height: 100vh; background-image: url('<?php echo get_template_directory_uri(); ?>/image/divider_1.png');">
    <div class="section no-pad-bot ">
      <div class="container">
        <br><br>
        
        <div class="row center">
          <div class="col s12 showcase_text">
            <h1 class=" "><?php echo get_theme_mod( 'bondhon_showcase_title','Bondhon'); ?></h1>
            <h5 class=" "><?php echo get_theme_mod('bondhon_showcase_description', 'Need a photographer to capture your moments? Then you have come to the right place. Don\'t hesitate to see our recent works.'); ?></h5>
          </div>
          
        </div>
        <div class="row center">
          <a href="#contact_us"  class="btn-large waves-effect waves-light  catch_us_btn">Catch Us</a>
        </div>
        <br><br>

      </div>
    </div>

    <?php 

      $showcase_background_img = get_theme_mod( 'bondhon_showcase_background_img_url', '' ); 
    ?>
    <div class="parallax"><img src="<?php echo ($showcase_background_img != '') ? $showcase_background_img:get_template_directory_uri().'/image/showcase_background.webp'; ?>" alt="Showcase Background"></div>
  </div>

<?php endif; ?>


<!--What do we do area-->
<?php if ( true == get_theme_mod( 'bondhon_show_what_we_do', true ) ) : ?>

  <div class="what_do_con" id="about">
    <div class="container">
      <div class="row">
        <div class="col s12 what_do_we_do" >
            <h1><?php echo get_theme_mod( 'bondhon_what_we_do_title','What do we do'); ?></h1>
            <div class="details_what_do">
              <?php 
              $what_we_do_details = get_theme_mod( 'bondhon_what_we_do_description', '' );
              if ($what_we_do_details != '') :
                echo $what_we_do_details;
                else:?>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>

<!--What do we do area end-->

<!--recent works  area -->

  <div class="recent_work_wrapper" id="recent_work" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/divider_5.png'), url('<?php echo get_template_directory_uri(); ?>/image/pattern.png');">
    <div class="container">
      <div class="recent_work_head">
        <h1>Recent Work's</h1>
      </div>
    </div>

    <div class="recent_work_items_wrapper">
<?php
  //recent works 
  $works_args = array(
    'numberposts' => 6,
  );
   
  $works = get_posts( $works_args );
?>     
  <?php if (count($works) >= 0 && $works != null) : ?>
      <ul class="recent_work_items work_count_<?php echo count($works); ?>">

      <?php foreach( $works as $work ) : ?>
        <li class="work" style="background-image:url('<?php echo get_the_post_thumbnail_url($work->ID,'full') ?>');">
          <a onclick="document.getElementById('<?php echo $work->ID; ?>').click()">
            <div class="fig-content">
              <?php echo get_the_post_thumbnail( $work->ID,'post-thumbnail', array( 'class' => 'fig-img materialboxed', 'id' => $work->ID)  ); ?>
              <div class="fig-wb">
                <div class="fig-body">
                  <h2><?php echo $work->post_title; ?></h2>
                  <p><?php echo substr(strip_tags($work->post_content),0,250); ?></p>
                </div>
              </div>

            </div>
          </a>
        </li>
      <?php endforeach; ?>

      </ul>
  <?php else: ?>
    <p><center>Don't have any recent work :(</center></p>
  <?php endif; ?>
    <div class="container">
      <div class="recent_work_footer">
        <p>That's all for now..:)</p>
      </div>
    </div>
  </div>
</div>

<!-- our team area -->

  <div class="team_area_wrapper" id="team_area">
    <div class="container">
      <div class="team_area_head">
        <h1>Our Team Members</h1>
      </div>
    </div>

    <div class="team_items_wrapper">
      <div class="container">
        <div class="row team_members">

          <div class="col s12 m4">

            <div class="team_member">
              <div class="team_member_img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/team/1.jpg">
              </div>
              <div class="team_member_details">
                <div class="team_member_name_position">
                  <h2>Ema Watson</h2>
                  <p>CEO</p>
                </div>
                <div class="team_member_short_details">
                  <p>You know who am i.</p>
                </div>

                <div class="team_member_social_links">
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <div class="col s12 m4">

            <div class="team_member">
              <div class="team_member_img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/team/2.jpg">
              </div>
              <div class="team_member_details">
                <div class="team_member_name_position">
                  <h2>Roky</h2>
                  <p>Photographer</p>
                </div>
                <div class="team_member_short_details">
                  <p>Small name but big dream :)</p>
                </div>
                <div class="team_member_social_links">
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <div class="col s12 m4">

            <div class="team_member">
              <div class="team_member_img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/team/3.jpg">
              </div>
              <div class="team_member_details">
                <div class="team_member_name_position">
                  <h2>Shilpa Jein</h2>
                  <p>Editor</p>
                </div>
                <div class="team_member_short_details">
                  <p>Stack with photoshop.</p>
                </div>
                <div class="team_member_social_links">
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-twitter-square"></i>
                  </a>
                  <a class="team_member_social_link" href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </div>

  <hr class="hr-text" data-content="And">


<!-- our team area end -->








  <div class="contact_wrapper_before"></div>
  <div class="parallax-container valign-wrapper contact_wrapper" id="contact_us" style="min-height: 100vh;background-image: url('<?php echo get_template_directory_uri(); ?>/image/divider_2.png');">
    <div class="section no-pad-bot ">
      <div class="contact_d container">

        <div class="contact_header">
          <h2>Contact Us</h2>
        </div>
        <div class="contact_form_wrapper row">
          <form class="col m8 s12 offset-m2" id="bondhon_contact_form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
            <div class="row">
              <input type="hidden" name="action" value="bondhon_form_submit">
              <div class="input-field col s12 m6">
                <input id="full_name" name="full_name" type="text" class="validate">
                <label for="full_name">Full Name</label>
              </div>
              <div class="input-field col s12 m6">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="input-field col s12">
              <textarea id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Write your message</label>
            </div>
            <div class="input-field col s12">
              <button class="btn-large waves-effect waves-light  catch_us_btn send_btn">Send</button>
            </div>
          </form>
        </div> 

        <div class="or_find_us">
          <div class="find_us_header">
            <h2>you can also find us on</h2>
          </div>
          <div class="or_find_us_link">
          <?php
            // Default social link.
            $social_links = [
              [
                'link_title' => esc_html__( 'Facebook', 'bondhon' ),
                'fa_class'  => 'fa-facebook',
                'link_url'  => 'https://facebook.com/anikghosh356',
              ],
            ];

            $social_links = get_theme_mod( 'bondhon_social_links', $social_links );
          ?>

            <div class="social-icon">
              <ul class="s-icons">
              <?php foreach( $social_links as $social_link ) : ?>
                <li class="s-icon">
                  <a class="s-i-link" title="<?php echo $social_link['link_title']; ?>" href="<?php echo $social_link['link_url']; ?>">
                    <i class="fa <?php echo $social_link['fa_class']; ?>"></i>
                  </a>
                </li>
              <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div> 

      </div>
    </div>

    <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/image/background_2.webp" alt="Unsplashed background img 1"></div>
  </div>






<?php
  get_footer();
  
