<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
    	<div class="col-lg-8">
    		<?php foreach($menu as $m) : ?>
    		<form action="<?= base_url('menu/updateMenu') ?>" method="post" >
    			<div class="form-group">
					<input type="hidden" class="form-control" id="id" name="id" value="<?= $m->id?>">
				</div>
				<div class="form-group">
					<label for="menu">Title Menu</label>
					<input type="text" class="form-control" id="menu" name="menu" value="<?= $m->menu ?>">
				</div>
				

				<div class="form-group row justify-content-end">
					<div class="col-sm">
						<a href="<?= base_url('menu') ?>" class="btn btn-success">Back</a>
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>


    		</form>
    	<?php endforeach; ?>

    	</div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 