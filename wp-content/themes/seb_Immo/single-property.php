<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

    <div class="container">
        <header class="bien-header">
            <div>
                <h1 class="bien__title"><?php the_title(); ?> - <?= the_field('surface'); ?>m²</h1>
                <div class="bien__meta">
                    <div class="bien__location"><?= agence_city() ?></div>
                    <div class="bien__price">
                        <?php if (get_field('property_category') === 'buy'): ?>
                            <?= sprintf('%s $', get_field('price')); ?>
                        <?php else: ?>
                            <?= sprintf('%s $/mo', get_field('price')); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bien__actions">
                    <button class="btn btn-filled">Contacter l'agence</button>
                    <button class="btn">Appeler</button>
                </div>

                <!--
                <form action="" class="bien__form form-2column">
                  <div class="form-group">
                    <input type="text" id="username" class="form-control">
                    <label for="username">Pseudo</label>
                  </div>
                  <div class="form-group">
                    <input type="text" id="email" class="form-control">
                    <label for="email">Email</label>
                  </div>
                  <textarea placeholder="Message" class="form-control full"></textarea>
                  <button type="submit" class="btn">Commenter</button>
                </form>
                -->

            </div>
            <div>
                <div class="bien__photos js-slider">

                    <a href="https://picsum.photos/id/41/1280/720.jpg">
                        <img class="bien__photo" src="https://picsum.photos/id/41/777/444.jpg" alt="">
                    </a>

                    <a href="https://picsum.photos/id/42/1280/720.jpg">
                        <img class="bien__photo" src="https://picsum.photos/id/42/777/444.jpg" alt="">
                    </a>

                    <a href="https://picsum.photos/id/43/1280/720.jpg">
                        <img class="bien__photo" src="https://picsum.photos/id/43/777/444.jpg" alt="">
                    </a>

                </div>
            </div>
        </header>


        <div class="bien-body">
            <h2 class="bien-body__title"><?= __('Description', 'seb_Immo'); ?></h2>
            <div class="formatted">
                <?php the_content(); ?>
            </div>
        </div>

        <section class="bien-options">
            <div class="bien-option"><img src="area.78237e19.svg" alt=""> Superficie: 93m²</div>
            <div class="bien-option"><img src="elevator-fill.117c4510.svg" alt=""> Ascenseur</div>
            <div class="bien-option"><img src="rooms.b02e3d15.svg" alt=""> Nbr chambres: 4</div>
            <div class="bien-option"><img src="elevator.e0bdbd67.svg" alt=""> Etage: 3</div>
            <div class="bien-option"><img src="parking.bb37c0bc.svg" alt=""> Parking: Oui</div>
        </section>

    </div>

<?php endwhile; ?>
<?php get_footer(); ?>


