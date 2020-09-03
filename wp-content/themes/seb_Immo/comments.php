<?php
require_once('inc/walkers/CommentWalker.php');
$count = absint(get_comments_number());
?>
<div class="comments">
    <div class="comments__title">
        <?php if ($count > 0): ?>
            <?= sprintf(_n('%d Commentaire', '%d Commentaires', $count), $count); ?>
        <?php else: ?>
            <?= __('Lave a reply', 'seb_Immo'); ?>
        <?php endif; ?>
    </div>

    <div class="comments__list">
        <?php wp_list_comments(['style' => 'div', 'walker' => new Seb_ImmoCommentWalker()]); ?>
    </div>

    <?php if (comments_open()): ?>
        <?php comment_form() ?>
    <?php endif; ?>
</div>
