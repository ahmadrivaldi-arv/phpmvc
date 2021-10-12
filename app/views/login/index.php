<div class="row mt-5 fixed-top justify-content-center">
    <div class="col-lg-6">
        
        <?php FlasherMessage::showMessage() ?>
    </div>
</div>
<div class="row d-flex justify-content-center align-items-center vh-100 ">
    <div class="col-lg-4 col-sm-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="text-center text-primary mb-5"><strong>LOGIN</strong></h5>

                <form action="<?= BASE_URL ?>/login/validate" method="post">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" name='username' value="<?php if(isset($_POST['username'])) echo($_POST['username']) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name='password'>
                        </div>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary" name='btn-login'
                            style="width:100%;">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



