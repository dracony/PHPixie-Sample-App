<h3>Edit a fairy</h3>
<form method="POST" class="form-vertical">
    <div class="control-group<?= isset($errors['name']) ? ' error' : '' ?>">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input name="name" id="name" type="text" placeholder="Type something…" value="<?php $this->helper->output($fairy->name); ?>" />
            <span class="help-inline"><?= isset($errors['name']) ? $this->helper->escape(join(',', $errors['name'])) : '' ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="interests">Interests</label>
        <div class="controls">
            <textarea id="interests" name="interests"><?php $this->helper->output($fairy->interests); ?></textarea>
            <span class="help-inline"></span>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
