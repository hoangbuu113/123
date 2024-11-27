<form action="" method="post">    <!--action là 1 hành động trống yêu cầu trình duyệt gửi lại biểu mẫu cùng urf vs phương thức post-->
    <label for='posttext'>Type your post here:</label>
    <textarea name="posttext" rows="3" cols="40"></textarea>    

    <select name="users">
        <option value="">select an user</option>
    <?php foreach ($users as $user):?>
        <option value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>">    <!-- thiết lập tùy chọn của user cuộn và lặp lại-->
        <?=htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?>
    </option>
    <?php endforeach;?>
    </select>

    <select name="modules">
        <option value="">select an module</option>
    <?php foreach ($modules as $module): ?>
        <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">    <!-- thiết lập tùy chọn của module cuộn và lặp lại-->
        <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
    </option>
    <?php endforeach; ?>
    </select>

    <input type="submit" name="submit" value="Add">  <!-- nút add -->
</form>