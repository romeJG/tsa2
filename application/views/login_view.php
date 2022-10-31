<style>
    .container {
        padding: 18rem;
        padding-left: 25rem;
        padding-right: 25rem;
    }
</style>
<div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <?php echo form_open('home/login'); ?>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
        <?php echo form_error('username', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
        <?php echo form_error('password', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>

    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <a type="a" class="btn btn-danger" href="<?= base_url('home'); ?>"> Cancel</a>
    </form>
</div>