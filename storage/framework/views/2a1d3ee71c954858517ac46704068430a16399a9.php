<?php foreach($datas as $data): ?>
<p><i class="ion-ios-list-outline"></i> <?php echo e($data->callsign); ?> - <?php echo e($data->tlp); ?>

<br/>
<?php echo e($data->pesan); ?></p>
<?php endforeach; ?>