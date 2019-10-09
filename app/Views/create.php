<div class="col">
  <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> <?php echo $title;?> <a href="/" class="float-right"><button class="btn btn-primary text-right"><span data-feather="arrow-left-circle"></span> Go Back</button></a>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Worker Name:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="User Name">
            </div>

            <div class="form-group">
              <label class="control-label" for="dep">Department</label>
              <select name="dep_id" class="form-control" id="dep">
                <?php if (is_array($departments)) : ?>
                  <?php foreach ($departments as $department): ?>
                    <option value="<?php echo $department->id; ?>">
                      <?php echo $department->name; ?>
                    </option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <hr>
            <div class="form-group">
              <div class="mx-auto">
                <button id="save" type="submit" class="save btn btn-primary">Add Worker</button>
              </div>
            </div>

          </form>
        </div>
  </div>        
</div>
