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
                <h1><strong>Insert New Contact</strong></h1>
            </div>
            <form method="post" action="savecontact">
                <div class="card-body">
                    <div class="form-group">
                        <label>Contact Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Contact Name" required>
                    </div>
                    <div class="form-group">
                        <label>Contact No</label>
                        <input type="text" class="form-control" name="phone_no" placeholder="Enter Contact Number" required>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success text-left" name="save" value="Save Data">Save</button>
                    <a class="btn btn-secondary" href="displaydata" role="button">Cancel</a>
                </div>
            </form>
        </div>
    </div>
  </body>
</html>