<div class="login-form">
    <form action="" method="get" onsubmit="return false">
        <div>
            <label for="username">Username</label>
            <input type="text" required class="username-input form-control w-25" placeholder="Username">
        </div>
        <div>
            <label for="username">Password</label>
            <input type="password" required class="password-input form-control w-25" placeholder="Username">
        </div>
        <button type="submit" class="btn btn-primary mt-4 login-button">Login</button>
        <button class="btn btn-primary mt-4  rgt-bt"><a href="<?php echo $DOMAIN ?>/Register/registerPage" >Register</a></button>
    </form>
    <div class="text-danger err mt-4"></div>
</div>