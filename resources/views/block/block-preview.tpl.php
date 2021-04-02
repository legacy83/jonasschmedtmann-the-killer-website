<?php $style = implode(';', [
    'background-color: #eee',
    'padding: 20px 40px',
]); ?>

<section class="section-preview" style="<?= esc_attr($style); ?>">
    <p><?= vsprintf(__('Sorry, but the <strong>%s</strong> block has no preview available.', 'app-theme'), [
            esc_html($block['title']),
        ]); ?></p>
</section>
