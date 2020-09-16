<?php get_header(); ?>
<?php
    $isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');
    $cities = get_terms([
            'taxonomy' => 'property_city'
    ]);
    $types = get_terms([
            'taxonomy' => 'property_type'
    ]);
    $currentCity = get_query_var('city');
    $currentPrice = get_query_var('price');
    $currentType = get_query_var('property_type');
    $currentRooms = get_query_var('rooms');
    $city = get_term_by('slug', $currentCity, 'property_city')->name;

?>
<div class="container page-properties">

    <div class="search-form">
        <h1 class="search-form__title">
            <?= __('All our properties', 'seb_Immo'); ?>
            <?php if ($isRent): ?>
                <?= __(' for rent') ?>
            <?php else: ?>
                <?= __(' on sale') ?>
            <?php endif; ?>
        </h1>
        <?php if ($currentType): ?>
            <p><?= sprintf(__('Retrouver tous nos %ss sur le secteur de %s', 'seb_Immo'), $currentType, $city) ?></p>
        <?php else: ?>
            <p><?= sprintf(__('Retrouver tous nos biens sur le secteur de %s', 'seb_Immo'), $city) ?></p>
        <?php endif; ?>
        <hr>
        <form action="" class="search-form__form">
            <div class="form-group">
                <select name="city" id="city" class="form-control">
                    <?php foreach($cities as $city): ?>
                        <option value="<?= $city->slug ?>" <?php selected($city->slug, $currentCity) ?>><?= $city->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="city"><?= __('City', 'seb_Immo') ?></label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="price" placeholder="100 000 €" name="price" value="<?= esc_attr($currentPrice) ?>">
                <label for="price"><?= __('Budget', 'seb_Immo') ?></label>
            </div>
            <div class="form-group">
                <select name="property_type" id="property_type" class="form-control">
                    <option value=""><?= __('All types', 'seb_Immo') ?></option>
                    <?php foreach($types as $type): ?>
                        <option value="<?= $type->slug ?>" <?php selected($type->slug, $currentType) ?>><?= $type->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="property_type"><?= __('Type', 'seb_Immo') ?></label>
            </div>
            <div class="form-group">
                <input type="number" name="rooms" class="form-control" id="rooms" placeholder="4" value="<?= esc_attr($currentRooms) ?>">
                <label for="rooms"><?= __('Rooms', 'seb_Immo') ?></label>
            </div>
            <button type="submit" class="btn btn-filled"><?= __('Search', 'seb_Immo') ?></button>
        </form>
    </div>

    <?php $i = 0; while (have_posts()): the_post() ?>
        <?php set_query_var('property-large', $i === 7); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++; endwhile; ?>
</div>

<?php if(get_query_var('paged', 1) > 1): ?>
    <?= seb_immo_paginate() ?>
<?php elseif ($nextPostLink = get_next_posts_link(__('More properties +', 'seb_Immo'))): ?>
    <div class="pagination">
        <?= $nextPostLink ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>


