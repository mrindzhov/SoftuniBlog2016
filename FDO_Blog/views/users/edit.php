<?php $this->title = 'Edit user info'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<?php $old_user_info = $this->user_info ?>

<form method="post">
    <div>Full name:</div>
    <div><input type="text" name="newFullname" value="<?=$old_user_info['full_name'] ?>"></div>

    <div>New Email:</div>
    <div><input type="text" name="newEmail" value="<?=$old_user_info['email'] ?>"></div>

    <input type="submit" value="Save changes" onsubmit="<?php $this->editUserInfo() ?>">
</form>
