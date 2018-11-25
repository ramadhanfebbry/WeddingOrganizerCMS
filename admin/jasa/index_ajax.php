<?php
  require '../../config.php';
  if(isset($_GET['limit'])){
    $limit = $_GET['limit'];
  }else{
    $limit = 5;
  }

  if(isset($_GET['page'])){
    $page = $_GET['page'] - 1;
  }else{
    $page = 0;
  }

  $sql = "SELECT * FROM jasa LIMIT ". $limit. " OFFSET ". $page ."";

  $result = $db->query($sql);
  $count = count($result);
  $count2 = ($db->query("SELECT count(*) as count FROM jasa ")->fetch_assoc()['count']);
  $no = 0;
          // output data of each row
  while($row = $result->fetch_assoc()) {
    $no+=1;
    ?>
    <tr>
      <td>
        <span class="custom-checkbox">
          <input type="checkbox" id="checkbox1" name="options[]" value="1">
          <label for="checkbox1"></label>
        </span>
      </td>
      <td><?php echo $no; ?></td>
      <td class="nama"><?php echo $row['nama']; ?></td>
      <td class="harga"><?php echo $row['harga']; ?></td>
      <td class="status"><?php echo $row['status']; ?></td>
      <td>
        <a href="#editEmployeeModal" onclick="setFormEdit(this)" class="edit" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>
        <a href="#deleteEmployeeModal" onclick="setSingleDelete(this)" class="delete" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      </td>
    </tr>

    
    <?php
  }
?>