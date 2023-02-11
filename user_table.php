<?php
include 'controller/get_all_user.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
<style>
table, th, td {
  border: 1px solid black;

}
</style>
</head>
<body>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Year Level</th>
        <th>Section</th>
        <th>Department</th>

    </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($results)) { ?>
    <tr>
        <td>
            <?php echo $row['id']; ?> 
        </td>
        <td>
            <?php echo $row['f_name']; ?> <?php echo $row['m_name']; ?> <?php echo $row['l_name']; ?>
        </td>
        <td>
            <?php echo $row['year_lvl']; ?>
        </td>
        <td>
             <?php echo $row['section']; ?>
        </td>
        <td>
            <?php echo $row['dept']; ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
