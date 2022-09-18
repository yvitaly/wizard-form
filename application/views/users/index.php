<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/wizard-form/public/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<h1>Users Page</h1>
<?php if (empty($vars['users'])) { ?>
    <h2>No Users</h2>
<?php } ?>
<?php if (!empty($vars['users'])) { ?>
    <table class="table table-bordered table-hover">
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">Full Name</th>
            <th scope="col">Report Subject</th>
            <th scope="col">Email</th>
        </tr>
        <?php foreach($vars['users'] as $user) {?>
            <tr>
                <td>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user->photo); ?>" />
                </td>
                <td><?php echo $user->firstName . ' ' . $user->lastName; ?></td>
                <td><?php echo $user->reportSubject; ?></td>
                <td><?php echo $user->email; ?></td>
            </tr>
        <?php }?>
    </table>
<?php }?>



</body>
</html>
