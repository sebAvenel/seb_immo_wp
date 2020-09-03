<?php
add_filter('comment_form_default_fields', function (array $fields): array {
    $authorLabel = __('Name');
    $emailLabel = __('Email');
    $urlLabel = __('Website');

    $fields['author'] = <<<HTML
    <div class="form-group">
        <input type="text" id="author" name="author" class="form-control">
        <label for="author">{$authorLabel}</label>
    </div>
HTML;
    $fields['email'] = <<<HTML
    <div class="form-group">
        <input type="text" id="email" name="email" class="form-control">
        <label for="email">{$emailLabel}</label>
    </div>
HTML;
    $fields['url'] = <<<HTML
    <div class="form-group">
        <input type="url" id="website" name="url" class="form-control">
        <label for="url">{$urlLabel}</label>
    </div>
HTML;

    return $fields;
});
