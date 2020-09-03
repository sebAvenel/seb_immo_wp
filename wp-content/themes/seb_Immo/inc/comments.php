<?php
add_filter('comment_form_default_fields', function (array $fields): array {
    $authorLabel = __('Name');
    $emailLabel = __('Email');

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
    unset($fields['url']);

    return $fields;
});

add_filter('comment_form_defaults', function (array $fields): array {
    $commentLabel = _x('Comment', 'noun');
    $fields['comment_field'] = <<<HTML
    <textarea placeholder="{$commentLabel}" name="comment" id="comment" class="form-control full" required></textarea>
HTML;
    return $fields;
});

add_filter('comment_form_fields', function (array $fields): array {
    //var_dump(array_keys($fields));
    $newFields = [];
    foreach ($fields as $key => $value){
        if ($key === 'comment'){

        }else{
            if ($key === 'cookies'){
                $newFields['comment'] = $fields['comment'];
            }
            $newFields[$key] = $value;
        }
    }
    return $newFields;
});