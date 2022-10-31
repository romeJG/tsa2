<style>
    .container {
        padding: 50px;
    }
</style>

<h2 class="text-center" style="margin-top: 20px;">Register</h2>
<div class="container mt-5">

    <?php echo form_open('home/register'); ?>
    <div class="mb-3 input-group">
        <span class="input-group-text fw-bold">Name</span>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?php echo set_value('fname') ?>">
        <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" value="<?php echo set_value('mname') ?>">
        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo set_value('lname') ?>">
    </div>
    <?php
    echo form_error('fname', '<span class="form-text text-danger">| ', '*</span> ');
    echo form_error('mname', '<span class="form-text text-danger">| ', '*</span> ');
    echo form_error('lname', '<span class="form-text text-danger">| ', '*</span> ');

    ?>

    <div class="mb-3">
        <label for="uname" class="form-label fw-bold">Username</label>
        <input type="text" name="uname" class="form-control" id="uname" value="<?php echo set_value('uname') ?>">
        <?php echo form_error('uname', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label fw-bold">Password</label>
        <input type="password" name="pass" class="form-control" id="pass">
        <?php echo form_error('pass', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="cpass" class="form-label fw-bold">Confirm Password</label>
        <input type="password" name="cpass" class="form-control" id="cpass">
        <?php echo form_error('cpass', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="bday" class="form-label fw-bold">Birthday</label>
        <input type="date" name="bday" class="form-control" id="bday" value="<?php echo set_value('bday') ?>">
        <?php echo form_error('bday', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" value="<?php echo set_value('email') ?>">
        <?php echo form_error('email', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label fw-bold">Contact Number</label>
        <input type="text" name="contact" class="form-control" id="contact" value="<?php echo set_value('contact') ?>">
        <?php echo form_error('contact', '<span class="form-text text-danger">| ', '*</span> '); ?>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a type="a" class="btn btn-danger" href="<?= base_url('home'); ?>">Cancel</a>
    </form>

</div>