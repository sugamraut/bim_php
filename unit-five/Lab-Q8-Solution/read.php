<?php require 'data.php'; ?>
<table border="1">
    <tr>
        <th>itemID</th>
        <th>itemDesc</th>
        <th>rate</th>
        <th>qty</th>
    </tr>
    <?php
    foreach ($data as $value) {
    ?>
    <tr>
        <td><?php echo $value['itemID']; ?></td>
        <td><?php echo $value['itemDesc']; ?></td>
        <td><?php echo $value['rate']; ?></td>
        <td><?php echo $value['qty']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>