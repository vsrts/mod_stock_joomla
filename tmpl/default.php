<?php
// No direct access
defined('_JEXEC') or die; ?>

<?php foreach($stock as $stockItem): ?>
    <div class="akcia">
        <img class="akcia-img" src="<?= $stockItem->image; ?>" alt="">
        <div class="akcia-text">
            <?= $stockItem->text; ?>
        </div>
    </div>
<?php endforeach; ?>

