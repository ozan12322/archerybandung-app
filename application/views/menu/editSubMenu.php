<div class="container">
	<h1>Edit Sub Menu </h1>
	<div class="row">
		<div class="col-lg-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Sub Menu</h6>
                </div>
                <div class="card-body">
                	<?php foreach( $submenu as $sm) : ?>
                	<form action="<?= base_url('menu/updateSubMenu'); ?>" method="post">

                		<div class="modal-body">
                		
                			<div class="form-group">
                				<label for="menu">Title</label>
                				<input type="text" class="form-control" id="title" name="title" value="<?= $sm->title ?>">
                			</div>
                			<!-- <div class="form-group">
                				<label for="menu">Menu</label>
                				<input type="text" class="form-control" id="menu" name="menu" value="">
                			</div> -->
                			<div class="form-group">
                				<label for="menu">Url</label>
                				<input type="text" class="form-control" id="url" name="url" value="<?= $sm->url ?>">
                			</div>
                			<div class="form-group">
                				<label for="menu">icon</label>
                				<input type="text" class="form-control" id="icon" name="icon" value="<?= $sm->icon ?>">
                			</div>
                				<div class="form-group">
                				<input type="hidden" class="form-control" id="id" name="id" value="<?= $sm->id?>">
                			</div>
                		</div>
                		<div class="modal-footer">
                			<a href="<?= base_url('menu/submenu'); ?>" class="btn btn-secondary" data-dismiss="modal">Close</a>
                			<button type="submit" class="btn btn-primary">Update</button>
                		</div>
                	</form>
                <?php endforeach; ?>
                </div>
              </div>

            </div>
	</div>
</div>