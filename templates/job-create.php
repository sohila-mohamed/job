<?php include 'inc/header.php'; ?>

    <div class="container">     
        <h2 class="">create job listing</h2>
        <form method="post" action="create.php" class="create">
            <div class="create">
                <label>company</label>
                <input type="text" class="create" name="company">
            </div>

            <div class="create">
                <label>category</label>
                <select class="create" name="category">
                <option value="0">choose category</option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>">
                        <?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="create">
                <label>job title</label>
                <input type="text" class="create" name="job_title">
            </div>

            <div class="create">
                <label>description</label>
                <textarea class="create" name="description"></textarea>
            </div>

            <div class="create">
                <label>location</label>
                <input type="text" class="create" name="location">
            </div>

            <div class="create">
                <label>salary</label>
                <input type="text" class="create" name="salary">
            </div>

            <div class="create">
                <label>contact user</label>
                <input type="text" class="create" name="contact_user">
            </div>

            <div class="create">
                <label>contact email</label>
                <input type="text" class="create" name="contact_email">
            </div>
            <input type="submit" class="button" value="submit" name="submit">
        </form>
    </div>

<?php include 'inc/footer.php'; ?>