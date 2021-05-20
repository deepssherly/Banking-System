<?php
include 'config.php';
$sql = "SELECT * FROM bank";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html lang="en">

<?php include("reusables/header.php"); ?>
<div class="container">
    <h4 class="center grey-text text-darken-3"><b>MAKE TRANSACTIONS</b></h4>

    <table class="table striped z-depth-5 centered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <?php echo $user['Id'] ?>
                    </td>
                    <td>
                        <?php echo $user['Name'] ?>
                    </td>
                    <td>
                        <?php echo $user['Email'] ?>
                    </td>
                    <td>
                        <?php echo $user['Balance'] ?>
                    </td>
                    <td><a class="btn-small" href="selecteduser.php?Id=<?php echo $user['Id'] ?>">Make Transaction</a></td>

                </tr>


            <?php endforeach ?>

        </tbody>

    </table>
</div>

<?php include('reusables/footer.php') ?>