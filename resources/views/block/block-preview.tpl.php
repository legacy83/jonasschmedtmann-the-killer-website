<section class="section-preview" style="<?= implode(';', $preview_style); ?>">
    <p><?= vsprintf(__('Sorry, but the <strong>%s</strong> block has no preview available.', 'app-theme'), [
            esc_html($block['title']),
        ]); ?></p>
</section>
