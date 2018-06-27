<div class="card">
  <h5 class="card-header">Share Something</h5>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Share Title</label>
    		<input type="text" name="title" class="form-control"/>
    	</div>

    	<div class="form-group">
    		<label>Body</label>
    		<textarea name="title" class="form-control"></textarea>
    	</div>

    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="link" class="form-control"/>
    	</div>
    	<input class="btn btn-primary" type="submit" name="name" value="Submit" />

    	<a href="<?php echo ROOT_URL; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div> 
