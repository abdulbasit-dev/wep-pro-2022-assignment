<div class="row justify-content-center" style="margin-top: 5rem;">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="col-6 border rounded-3 p-5">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
        <div class="mb-3">
            <label for="password " class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-primary">Sign in</button>
            <p>Don't have an account? <a href="index.php?p=signup">Sign up</a></p>
        </div>
    </form>
</div>