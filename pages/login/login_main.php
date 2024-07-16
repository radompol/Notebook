<?php
session_start();
?>
<div class="d-flex justify-content-center" style="vertical-align: middle;">
    <div class="card m-4 " style="width: 400px;">

        <div class="card-body">
            <h1>Sign In</h1>
            <form id="formlogincredential">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input placeholder="Enter email address" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input placeholder="Enter password" type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="my-2">
                    <a style="cursor: pointer;">No account? Register here.</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
<script>
    $('#formlogincredential').submit(function(e) {
        e.preventDefault();
        checkCredentials()
    });

    function checkCredentials() {
        $.post("pages/login/actions/loginCredentials.php", {
                username: $('#exampleInputEmail1').val(),
                password: $('#exampleInputPassword1').val()
            },
            function(data) {
                if (data.trim().toLowerCase().match("Logged in successfully".toLowerCase())) {
                    $_SESSION['user_id'] = 1;
                    to_dashboard()
                }

            },

        );
    }
</script>