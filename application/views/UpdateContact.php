<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
  <head>
    <title>PhoneBook</title>
    <?php include 'script.php'; ?>
  </head>
  <body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="card-header text-center">
                <h1><strong>Update Contact</strong></h1>
            </div>
            <?php
            foreach ($data as $row) {
            ?>
                <form method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Contact Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" class="form-control" name="phone_no" value="<?php echo $row->phone_no; ?>" required>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success text-left" name="update" value="Update_Records">Update</button>
                        <a class="btn btn-secondary" href="displaydata" role="button">Cancel</a>
                    </div>
                </form>
            <?php
            }
            ?>
            
        </div>
    </div>
  </body>
</html>