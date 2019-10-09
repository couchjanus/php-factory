<div class="col">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> <?php echo $title;?> <a href="/" class="float-right"><button class="btn btn-primary text-right"><span data-feather="arrow-left-circle"></span> Go Back</button></a>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="worker" class="control-label">Worker Name</label>
                    <input type="text" class="form-control" id="worker" name="worker" value="<?= $worker->name;?>" required>
                </div>
                <div class="form-group">
                    <label for="department" class="control-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" value="<?= $worker->department;?>">
                </div>
                
                <div class="mx-auto">
                    <button type="submit" class="btn btn-primary text-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
