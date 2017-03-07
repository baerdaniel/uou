
              <?php
                /*
                 * This is the default post format.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

                <header class="workshop-header float-container">

                  <div class='artist-title L-1-2'>
                    <?php the_field('artist'); ?>
                    <?php the_field('artist_description'); ?>
                  </div>

                  <div class='group-title L-1-2'>
                    <?php the_field('group'); ?>
                    <?php the_field('group_description'); ?>
                  </div>

                  <h1 class="">
                    <?php the_title(); ?>
                  </h1>
                
                </header>




                <section>
                  <?php the_content(); ?>
                </section>


              </article> <?php // end article ?>
