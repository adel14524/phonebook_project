<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PhoneBook</title>
    <?php include 'script.php'; ?>
  </head>
  <body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="card-header text-center">
                <h1><strong>Phone Book List</strong></h1>
            </div>
            <div class="card-body" style="overflow-y:auto; height: 60vh;">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone. No</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                foreach ($data as $row) {
                                    $num = $row->phone_no;
                                    echo "<tr>";
                                    echo "<th scope='row' class='text-center'>".$i."</th>";
                                    echo "<td>".$row->name."</td>";
                                    echo "<td>".substr($num, 0, 3)."-".substr($num, 3, 8)."</td>";
                                    echo "<td class='text-center'>
                                            <a class='btn btn-warning mr-1' href='updatedata?id=".$row->id."' role='button'>Edit</a>
                                            <a class='btn btn-danger' href='deletedata?id=".$row->id."' role='button'>Delete</a>
                                        </td>";
                                    echo "<tr>";
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a class="btn btn-primary" href="savecontact" role="button">Add New Contact</a>
            </div>
        </div>
    </div>
  </body>
</html>