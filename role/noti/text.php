<?php 
	include("../../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT * FROM users where report = 'กำลังรอดำเนินการ...' Order By id DESC";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

        <li>
			<div class="timeline-panel">
				<div class="media mr-2">
					<img alt="image" width="50" src="https://www.labelsonline.co.uk/media/catalog/product/cache/4144d5a2ad04a864da81790e4da4c21c/5/0/50mm_general_warning-01_2.png">
				</div>
				<div class="media-body">
					<h6 class="mb-1"><?= $fetch['studentid'] ?></h6>
					<small class="d-block"><?= $fetch['created_at'] ?></small>
				</div>
			</div>
		</li>
<?php 	} ?>
