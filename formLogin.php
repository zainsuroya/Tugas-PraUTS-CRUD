<?= isset($_SESSION['MEMBER']) ? "<script>alert('Kamu sudah login dengan akun " . $member['fullname'] . "!');window.history.go(-1);</script>" : "" ?>

<div class="card mb-4">
    <div class="card-header">
        Form Login
    </div>
    <div class="card-body">
        <form method="POST" action="controllers/memberController.php">
            <div class="form-group row">
                <label for="uname" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="uname">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-secondary mb-4">Login</button>
                    <details>
                        <summary>Admin</summary>
                        <p>Username: Kim<br>Password: 123</p>
                    </details>
                    <details>
                        <summary>Staff</summary>
                        <p>Username: staff<br>Password: 123</p>
                    </details>
                    <details>
                        <summary>Manager</summary>
                        <p>Username: manager<br>Password: 123</p>
                    </details>
                </div>
            </div>
        </form>
    </div>
</div>