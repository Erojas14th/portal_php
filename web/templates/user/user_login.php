
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    <form class="login-page" action="index.php?controlador=user&action=login" method="post">
                        <div class="login-header margin-bottom-30">
                            <h2>Login to your account</h2>
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input placeholder="Username" id="username" name="username" class="form-control"
                                type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="Password" id="password" name="password" class="form-control"
                                type="password">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="checkbox">
                                    <input type="checkbox">Stay signed in</label>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary pull-right" type="submit">Login</button>
                            </div>
                        </div>
                        <hr>
                        <h4>Forget your Password ?</h4>
                        <p>
                            <a href="#">Click here</a>to reset your password.</p>
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </div>
    </div>
</div>
<!-- === END CONTENT === -->