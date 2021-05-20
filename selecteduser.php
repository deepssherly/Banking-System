<?php

include('config.php');

if (isset($_POST['submit'])) {
    print_r($_POST);
    $sender_name = mysqli_real_escape_string($conn, $_POST['from']);
    $receiver_name = mysqli_real_escape_string($conn, $_POST['to']);
    $amt = mysqli_real_escape_string($conn, $_POST['amount']);

    print_r($_POST);
    $add = sprintf("UPDATE bank SET balance = balance + %s WHERE Id = %s", $amt, $receiver_name);
    $sub = sprintf("UPDATE bank SET balance = balance - %s WHERE Id = %s", $amt, $sender_name);
    mysqli_query($conn, $add);
    mysqli_query($conn, $sub);

    $n1 = sprintf("SELECT Name FROM bank WHERE Id = %s", $sender_name);
    $n2 = sprintf("SELECT Name FROM bank WHERE Id = %s", $receiver_name);
    $result1 = mysqli_query($conn, $n1);
    $result2 = mysqli_query($conn, $n2);
    $name1 = mysqli_fetch_assoc($result1)['Name'];
    $name2 = mysqli_fetch_assoc($result2)['Name'];
    $tran_history = "INSERT INTO history(sender, receiver, amount) VALUES('$name1','$name2','$amt')";

    mysqli_query($conn, $tran_history);
    $loc = sprintf("Location: history.php?from=%s", $name1);
    header($loc);
}
if (isset($_GET['Id'])) {
    $id =  mysqli_real_escape_string($conn, $_GET["Id"]);
    $sql = "SELECT * FROM bank WHERE Id=$id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $sql_for_other_users = "SELECT * FROM bank WHERE NOT Id=$id";
    $result1 = mysqli_query($conn, $sql_for_other_users);
    $users = mysqli_fetch_all($result1, MYSQLI_ASSOC);
}



?>
<html lang="en">

<?php include('reusables/header.php'); ?>

<div class="container">
    <h4 class="center grey-text text-darken-3"><b>TRANSFER MONEY</b></h4>
    <div>
        <table class="table striped centered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($user["Id"]); ?></td>
                    <td><?php echo htmlspecialchars($user["Name"]); ?></td>
                    <td><?php echo htmlspecialchars($user["Email"]); ?></td>
                    <td><?php echo htmlspecialchars($user["Balance"]); ?></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="divider"></div>
    <div class="row ">
        <form method="POST" class="col s12 m6 l4 offset-m2 offset-l4" action="selecteduser.php"><br>
            <label class="black-text">Transfer To:</label>
            <input type="hidden" name="from" value="<?php echo htmlspecialchars($user["Id"]); ?>">
            <div class="input-field">
                <select name="to" required>
                    <option value="" disabled selected>Whom to transfer?</option>
                    <?php foreach ($users as $us) : ?>
                        <option value="<?php echo htmlspecialchars($us["Id"]); ?>"><?php echo htmlspecialchars($us["Name"]); ?></option>
                    <?php endforeach; ?>
                </select>

            </div>

            <div>
                <br>
                <br>

                <label class="black-text">Amount To Be Transferred:</label>
                <input type="number" class="form-control" name="amount" required>
                <br>
                <br>
                <div class="text-center">
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Transaction successfull</h4>
                            <p>Your transaction to the selected user has been successfully completed!</p>
                        </div>
                        <div class="modal-footer">
                            <input value='okay' class="modal-close waves-effect waves-green btn-flat" name="submit" type="submit">
                        </div>
                    </div>
                    <div class="center"><a class="btn modal-trigger" href="#modal1">Transfer</a></div>

                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
<script>
    $(document).ready(function() {
        $('.modal').modal();
    });
</script>
<?php include('reusables/footer.php') ?>