<?php

include 'config.php';
if (isset($_GET)) {
    $name = mysqli_real_escape_string($conn, $_GET['from']);
    $sql = "SELECT * from history WHERE sender = '$name' or receiver = '$name' ORDER BY time";
    $result = mysqli_query($conn, $sql);
    $rt = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($rt);
    mysqli_free_result($result);
    mysqli_close($conn);
}

?>


<html lang="en">

<?php include('reusables/header.php'); ?>
<div class="container section">
    <h4 class="center grey-text text-darken-3"><b>TRANSACTION HISTORY</b></h4>
    <table class="table striped centered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1 ?>
            <?php foreach ($rt as $i) : ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo htmlspecialchars($i['sender']); ?></td>
                    <td><?php echo htmlspecialchars($i['receiver']); ?></td>
                    <td><?php echo htmlspecialchars($i['amount']); ?></td>
                    <td><?php echo htmlspecialchars($i['time']); ?></td>


                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
    <div class="divider"></div>
</div>

<?php include('reusables/footer.php') ?>