<?php

require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/images.php');
require_once('inc/style.php');
require_once('inc/query/posts.php');
require_once('inc/query/property.php');
require_once('inc/comments.php');

function seb_Immo_icon(string $name): string
{
    $spriteUrl = get_template_directory_uri() . '/assets/sprite.14d9fd56.svg';
    return <<<HTML
    <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
HTML;
}

function seb_immo_paginate(): string
{
    return '<div class="pagination">' . paginate_links(['prev_text' => seb_Immo_icon('arrow'), 'next_text' => seb_Immo_icon('arrow')]) . '</div>';
}

function seb_immo_paginate_comments(): void
{
    echo '<div class="pagination">';
    paginate_comments_links(['prev_text' => seb_Immo_icon('arrow'), 'next_text' => seb_Immo_icon('arrow')]);
    echo '</div>';
}
