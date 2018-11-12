<div class="" style="background: #f7f7f7;opacity:0.9;">
	<div class="container">
		<br/>
		<?php foreach($data_berita as $datas): ?>
		<div class="konten" style="margin-top:5px">
			<i class="ion-ios-contact"></i>
			<span class="title">
				<b><?php echo e($datas->callsign); ?> - <?php echo e($datas->tlp); ?></b>
			</span>
			<p style="float:right"><?php echo e($datas->tgl); ?> - <?php echo e($datas->jam); ?></p>
			<p><?php echo e($datas->pesan); ?></p>
		</div>
		<br/>
		<?php endforeach; ?>
	</div>
</div>	

