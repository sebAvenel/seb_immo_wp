<?php get_header(); ?>
<div class="container page-sidebar">
    <?php while (have_posts()): the_post(); ?>
        <main>
            <header class="news-single__header">
                <div class="news-single__title"><?php the_title() ?></div>
                <div class="news-single__meta">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)):
                        ?>
                        <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
                    <?php endif; ?>
                    <div class="news__date">Publié le 12/0/2020</div>
                </div>
            </header>
            <div class="formatted">
                <p>
                    <img src="https://i.picsum.photos/id/234/950/530.jpg" alt="">
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea esse odit optio! At dolor, doloremque
                    ducimus,
                    earum et ex incidunt, ipsam maxime nemo numquam quam repellendus soluta unde voluptate
                    voluptatibus!</p>
                <p>Adipisci asperiores consectetur dicta dolores fuga impedit non optio perspiciatis ullam veniam!
                    Aliquid
                    dolorem ducimus ex laborum odit quae temporibus voluptatem. At dolorem excepturi hic omnis placeat
                    soluta,
                    tempora ullam?</p>
                <h2>Titre de second niveau</h2>
                <p>Ab alias animi aperiam cum dicta dolorem dolorum earum ex fuga incidunt iste laboriosam libero
                    magnam,
                    mollitia nihil officia officiis perspiciatis quam quas quia ratione repellat tenetur totam ut
                    voluptatibus.</p>
                <p>Accusamus aspernatur beatae dolorem earum, eligendi, est eum expedita facere fugiat impedit in labore
                    laboriosam laborum, neque numquam porro possimus quia quod reiciendis repellat repellendus sint
                    tenetur ut
                    vitae voluptate?</p>
                <h3>Titre de troisième niveau</h3>
                <p>Accusantium, dignissimos, distinctio ducimus esse expedita molestiae mollitia nisi obcaecati optio,
                    quas quia
                    rem ullam. Ab ad adipisci autem cupiditate eius eum, voluptates? Aut dolores mollitia quisquam, sed
                    sunt
                    ut!</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur consequuntur cum
                        dolores eaque
                    </li>
                    <li>Architecto at dolores nihil non quod? Ad architecto, aspernatur at cupiditate distinctio dolor
                        dolorem
                    </li>
                    <li>A at corporis cumque dignissimos, distinctio eaque eligendi enim exercitationem explicabo illum
                        labore
                    </li>
                    <li>Ad asperiores cumque esse et molestiae natus nemo quaerat sint tempora ullam. Dolore id quae
                        similique
                    </li>
                    <li>Consequuntur corporis eligendi enim iusto officiis perferendis quasi qui quod suscipit
                        voluptatem.
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid, at atque, consequatur
                    consequuntur culpa est eveniet fugit illum ipsum magni nesciunt nobis non officia quam quasi quia
                    quod
                    saepe.</p>
                <p>A alias aliquam id totam ut. Autem consectetur, dolore facilis id ipsa vel. At blanditiis, eligendi
                    esse illo
                    ipsa ipsam itaque maxime nam nemo nesciunt nihil nobis, porro, sit voluptatum?</p>
                <blockquote class="wp-block-quote"><p>«&nbsp;Soyez vous-même, les autres sont déjà pris.&nbsp;» </p>
                    <cite>— Oscar Wilde.</cite></blockquote>

                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur consequuntur cum
                        dolores eaque
                    </li>
                    <li>Architecto at dolores nihil non quod? Ad architecto, aspernatur at cupiditate distinctio dolor
                        dolorem
                    </li>
                    <li>A at corporis cumque dignissimos, distinctio eaque eligendi enim exercitationem explicabo illum
                        labore
                    </li>
                    <li>Ad asperiores cumque esse et molestiae natus nemo quaerat sint tempora ullam. Dolore id quae
                        similique
                    </li>
                    <li>Consequuntur corporis eligendi enim iusto officiis perferendis quasi qui quod suscipit
                        voluptatem.
                    </li>
                </ol>
            </div>

            <div class="comments">
                <div class="comments__title">10 commentaires</div>

                <div class="comments__list">

                    <div class="comment">
                        <img alt=""
                             src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g"
                             class="comment__avatar" height="120" width="120">
                        <div class="comment__body">
                            <footer>
                                <div class="comment__username">A WordPress Commenter</div>
                                <div class="comment__date">October 23, 2019 at 11:51 am</div>
                            </footer>
                            <div class="comment__content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus
                                    necessitatibus officiis.
                                    Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur
                                    perspiciatis provident, quia
                                    reiciendis rem sapiente tempore, veniam.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti
                                    dicta dolores esse,
                                    incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo
                                    sapiente suscipit
                                    voluptatum!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img alt=""
                             src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g"
                             class="comment__avatar" height="120" width="120">
                        <div class="comment__body">
                            <footer>
                                <div class="comment__username">A WordPress Commenter</div>
                                <div class="comment__date">October 23, 2019 at 11:51 am</div>
                            </footer>
                            <div class="comment__content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus
                                    necessitatibus officiis.
                                    Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur
                                    perspiciatis provident, quia
                                    reiciendis rem sapiente tempore, veniam.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti
                                    dicta dolores esse,
                                    incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo
                                    sapiente suscipit
                                    voluptatum!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img alt=""
                             src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g"
                             class="comment__avatar" height="120" width="120">
                        <div class="comment__body">
                            <footer>
                                <div class="comment__username">A WordPress Commenter</div>
                                <div class="comment__date">October 23, 2019 at 11:51 am</div>
                            </footer>
                            <div class="comment__content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus
                                    necessitatibus officiis.
                                    Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur
                                    perspiciatis provident, quia
                                    reiciendis rem sapiente tempore, veniam.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti
                                    dicta dolores esse,
                                    incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo
                                    sapiente suscipit
                                    voluptatum!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img alt=""
                             src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g"
                             class="comment__avatar" height="120" width="120">
                        <div class="comment__body">
                            <footer>
                                <div class="comment__username">A WordPress Commenter</div>
                                <div class="comment__date">October 23, 2019 at 11:51 am</div>
                            </footer>
                            <div class="comment__content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus
                                    necessitatibus officiis.
                                    Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur
                                    perspiciatis provident, quia
                                    reiciendis rem sapiente tempore, veniam.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti
                                    dicta dolores esse,
                                    incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo
                                    sapiente suscipit
                                    voluptatum!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img alt=""
                             src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g"
                             class="comment__avatar" height="120" width="120">
                        <div class="comment__body">
                            <footer>
                                <div class="comment__username">A WordPress Commenter</div>
                                <div class="comment__date">October 23, 2019 at 11:51 am</div>
                            </footer>
                            <div class="comment__content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus
                                    necessitatibus officiis.
                                    Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur
                                    perspiciatis provident, quia
                                    reiciendis rem sapiente tempore, veniam.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti
                                    dicta dolores esse,
                                    incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo
                                    sapiente suscipit
                                    voluptatum!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="comments__title">Laissez un commentaire</div>
                <form action="" class="form-2column">
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

            </div>


        </main>
    <?php endwhile; ?>
    <aside class="sidebar">
        <?php dynamic_sidebar('blog') ?>
    </aside>

</div>
<?php get_footer(); ?>
