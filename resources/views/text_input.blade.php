<div class="form-group">
    <input
        class="form-control"
        type="text"
        name="<?php echo $name ?>"
        value="<?php echo old($name, $default) ?>"
        placeholder="<?php echo $label ?>"
    />
    <?php if($err = $errors->first($name)): ?>
        <span class="text-danger"><?php echo $err ?></span>
    <?php endif; ?>
</div>
