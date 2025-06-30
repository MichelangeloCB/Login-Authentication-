<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:40px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Dashboard</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= ucfirst($userInfo['name']); ?></td>
                            <td><?= $userInfo['email']; ?></td>
                            <td><a href="<?= site_url('/apt/public/auth/login');  ?>">Logout</td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>