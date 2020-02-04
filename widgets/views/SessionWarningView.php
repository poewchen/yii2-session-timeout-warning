<?php
use yii\helpers\Url;

/** @var \yii\web\View $this */
/** @var string|integer $userId */
/** @var array|string $extendUrl */
/** @var integer $warnBefore */
/** @var array|string $logoutUrl */
?>

    <div id="session-warning-modal" class="modal fade" tabindex="-1" role="dialog" data-warn-before="<?= $warnBefore; ?>" data-user-id="<?= $userId; ?>" data-extend-url="<?= Url::to($extendUrl); ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="message"></div>
                </div>
                <div class="modal-footer">
                    <?php if ($logoutUrl): ?>
                        <a href="<?= Url::to($logoutUrl) ?>" class="btn btn-default"><?= Yii::t('poewchen/sessionWarning', 'Logout') ?></a>
                    <?php endif; ?>
                    <button type="button" class="btn btn-success continue"><?= Yii::t('poewchen/sessionWarning', 'Continue') ?></button>
                </div>
            </div>
        </div>
    </div>

<?php
\poewchen\sessionWarning\assets\SessionWarningAsset::register($this)
    ->initPlugin($this, [
        'logoutUrl' => $logoutUrl,
    ]);
