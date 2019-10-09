<div class="col">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> <?php echo $title;?> <a href="/" class="float-right"><button class="btn btn-primary text-right"><span data-feather="arrow-left-circle"></span> Go Back</button></a>
        </div>
        <div class="card-body">
            <h2>Salary</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="worker" class="control-label">Worker Name</label>
                    <input type="text" class="form-control" id="worker" name="worker" value="<?= $worker->name;?>" disabled>
                </div>
                <div class="form-group">
                    <label for="department" class="control-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" disabled value="<?= $worker->department;?>">
                </div>

                <div class="form-group">
                    <label for="price" class="control-label">NET price</label>
                    <input type="text" class="form-control" id="price" name="price" disabled value="<?= $worker->price;?>">

                    <label for="amount" class="control-label">AMOUNT</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="1">

                    <p id="error-name"></p>
                </div>

                <div class="form-group">
                    <label for="salary" class="control-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="">
                </div>
                
                <div class="mx-auto">
                    <button type="submit" id="save" class="btn btn-primary text-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
