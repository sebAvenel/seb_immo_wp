<form action="<?= esc_url(home_url('/')) ?>" class="form-group form-search">
    <input type="search" placeholder="<?= __('Search post', 'seb_Immo') ?>" name="s" value="<?= get_search_query() ?>">
    <button type="submit">
        <?= seb_Immo_icon('search'); ?>
    </button>
</form>
