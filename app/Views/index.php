<div class="col">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> <?php echo $title;?> <a href="/workers/create" class="float-right"><button class="btn btn-primary text-right"><span data-feather="plus"></span> Add New</button></a>
        </div>
        <div class="table-responsive">
            <?php if (count($workers)>0):?>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Worker Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($workers as $worker):?>
                    <tr>
                      <td><?php echo $worker->id;?></td>
                      <td><?php echo $worker->name;?></td>
                      <td>
                        <a href="/payrolls/create/<?=$worker->id?>"><button class="btn btn-default"><span data-feather="plus"></span> Add payroll</button></a>
                      </td>
                    </tr>
                <?php endforeach;?>
              </tbody>
            </table>  
            <?php else: echo "No users yet...";?>
            <?php  endif;?>
        </div>
    </div>
</div>
