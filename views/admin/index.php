
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('CustomPagesModule.base', 'Custom Pages Extended'); ?></div>
    <div class="panel-body">

        <?php echo HHtml::link(Yii::t('CustomPagesModule.base', 'Create new Page'), $this->createUrl('edit'), array('class' => 'btn btn-primary')); ?>

        <p />
        <p />


        <?php if (count($pages) != 0): ?>
            <?php
            $classes = CustomPage::getNavigationClasses();
            $types = CustomPage::getPageTypes();
            ?>
            <table class="table">
                <tr>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Title'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Navigation'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Type'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Sort Order'); ?></th>
                    <th><?php echo Yii::t('CustomPagesModule.base', 'Visibility'); ?></th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><i class="fa <?php echo $page->icon; ?>"></i> <?php echo HHtml::link($page->title, $this->createUrl('edit', array('id' => $page->id))); ?></td>
                        <td><?php echo $classes[$page->navigation_class]; ?></td>
                        <td><?php echo $types[$page->type]; ?></td>
                        <td><?php echo $page->sort_order; ?></td>
                        <td><?php echo $page->visibility; ?></td>
                        <td><?php echo HHtml::link('Edit', $this->createUrl('edit', array('id' => $page->id)), array('class' => 'btn btn-primary btn-xs pull-right')); ?></td>
                    </tr>

                <?php endforeach; ?>
            </table>

        <?php else: ?>

            <p><?php echo Yii::t('CustomPagesModule.base', 'No custom pages created yet!'); ?></p>


        <?php endif; ?>

    </div>
</div>
