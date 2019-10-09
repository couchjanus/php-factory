<div class="col">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> <?php echo $title;?> 
        </div>
        <div class="table-responsive">
            <?php if (count($payrolls)>0):?>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Month</th>
                  <th>Worker Name</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($payrolls as $payroll):?>
                    <tr>
                      <td><?php echo $payroll->id;?></td>
                      <td><?php echo $payroll->month_salary;?></td>
                      <td><?php echo $payroll->worker_id;?></td>
                      <td><?php echo $payroll->salary;?></td>
                      <td>
                        <button class="btn btn-default"><span data-feather="eye"></span> View</button>
                        <button class="btn btn-primary"><span data-feather="edit"></span> Edit</button>
                        <button class="btn btn-danger"><span data-feather="delete"></span> Delete</button>
                      </td>
                    </tr>
                <?php endforeach;?>
              </tbody>
            </table>  
            <?php else: echo "No payrolls yet...";?>
            <?php  endif;?>
        </div>
    </div>
</div>