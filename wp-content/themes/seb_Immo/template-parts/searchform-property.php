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
<form action="<?= get_post_type_archive_link('property') ?>" class="search-form__form">
    <?php if (is_front_page()): ?>
    <div class="search-form__checkbox">
        <div class="form-check form-check-inline">
            <input class="form-check-input" <?php checked(!$isRent) ?> type="radio" name="property_category" id="<?= _x('buy', 'URL', 'agence') ?>" value="<?= _x('buy', 'URL', 'agence') ?>">
            <label class="form-check-label" for="<?= _x('buy', 'URL', 'agence') ?>"><?= __('Buy', 'seb_Immo') ?></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" <?php checked($isRent) ?> type="radio" name="property_category" id="<?= _x('rent', 'URL', 'agence') ?>" value="<?= _x('rent', 'URL', 'agence') ?>">
            <label class="form-check-label" for="<?= _x('rent', 'URL', 'agence') ?>"><?= __('Rent', 'seb_Immo') ?></label>
        </div>
    </div>
    <?php endif; ?>
    <div class="form-group">
        <select name="city" id="city" class="form-control">
            <option value=""><?= __('All cities', 'seb_Immo') ?></option>
            <?php foreach ($cities as $city): ?>
                <option value="<?= $city->slug ?>" <?php selected($city->slug, $currentCity) ?>><?= $city->name ?></option>
            <?php endforeach; ?>
        </select>
        <label for="city"><?= __('City', 'seb_Immo') ?></label>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" id="price" placeholder="100 000 €" name="price"
               value="<?= esc_attr($currentPrice) ?>">
        <label for="price"><?= __('Budget', 'seb_Immo') ?></label>
    </div>
    <div class="form-group">
        <select name="property_type" id="property_type" class="form-control">
            <option value=""><?= __('All types', 'seb_Immo') ?></option>
            <?php foreach ($types as $type): ?>
                <option value="<?= $type->slug ?>" <?php selected($type->slug, $currentType) ?>><?= $type->name ?></option>
            <?php endforeach; ?>
        </select>
        <label for="property_type"><?= __('Type', 'seb_Immo') ?></label>
    </div>
    <div class="form-group">
        <input type="number" name="rooms" class="form-control" id="rooms" placeholder="4"
               value="<?= esc_attr($currentRooms) ?>">
        <label for="rooms"><?= __('Rooms', 'seb_Immo') ?></label>
    </div>
    <button type="submit" class="btn btn-filled"><?= __('Search', 'seb_Immo') ?></button>
</form>