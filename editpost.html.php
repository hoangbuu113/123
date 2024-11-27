<form action ="" method="post">
    <input type = "hidden" name="postid" value="<?=$post['id'];?>">  <!-- có biểu mẫu ẩn lưu khóa chính để chỉnh -->
    <label for ='posttext'>Edit your post here:</label>
    <textarea name="posttext" rows="3" cols="40">
    <?=htmlspecialchars($post['posttext'], ENT_QUOTES, 'UTF-8')?>           
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>