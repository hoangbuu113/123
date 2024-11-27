<?php if (isset($error)): ?>    <!-- Display error if it exists -->
    <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php else: ?>
    <table border='1px'>
        <p><?= htmlspecialchars($totalPosts, ENT_QUOTES, 'UTF-8') ?> post(s) have been submitted to Internet Post for everyone.</p>

        <?php foreach ($posts as $post): ?>  <!-- Loop through posts array -->
            <tr>
                <td width="300px">
                    <?= htmlspecialchars($post['posttext'], ENT_QUOTES, 'UTF-8') ?>  <!-- Safely output post text -->
                    <br /><?= htmlspecialchars($post['modulename'], ENT_QUOTES, 'UTF-8') ?> <!-- Module name -->

                    (by <a href="mailto:<?= htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8') ?>">  <!-- Author email -->
                    <?= htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') ?></a>) <!-- Author name -->
                    
                    <!-- Edit post link -->
                    <a href="editpost.php?id=<?= htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8') ?>">Edit</a>

                    <!-- Delete post form -->
                    <form action="deletepost.php" method="post">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td width="150px">
                    <?php $display_date = date("D d M Y", strtotime($post['postdate'])) ?>  <!-- Format post date -->
                    <?= htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8') ?>
                </td>
                <td width="150px">
                    <img height="100px" src="images/<?= htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8') ?>" />
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
