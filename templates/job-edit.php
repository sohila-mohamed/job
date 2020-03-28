<?php include 'inc/header.php'; ?>

    <div class="container">     
        <h2 class="edit">edit job listing</h2>
        <form method="post" action="edit.php?id=<?php echo $job->id; ?>" class="edit">
            <div class="edit">
                <label>company</label>
                <input type="text" class="edit" name="company" value="<?php echo $job->company; ?>">
            </div>

            <div class="edit">
                <label>category</label>
                <select class="edit" name="category">
                <option value="0">choose category</option>
                    <?php foreach($categories as $category): ?>
                        <?php if($job->category_id == $category->id): ?>
                            <option value="<?php echo $category->id; ?>" selected>
                        <?php else: ?>
                            <option value="<?php echo $category->id; ?>">
                        <?php echo $category->name; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="edit">
                <label>job title</label>
                <input type="text" class="edit" name="job_title" value="<?php echo $job->job_title; ?>">
            </div>

            <div class="edit">
                <label>description</label>
                <textarea class="edit" name="description"></textarea><?php echo $job->job_description; ?>
            </div>

            <div class="edit">
                <label>location</label>
                <input type="text" class="edit" name="location" value="<?php echo $job->job_location; ?>">
            </div>

            <div class="edit">
                <label>salary</label>
                <input type="text" class="edit" name="salary" value="<?php echo $job->job_salary; ?>">
            </div>

            <div class="edit">
                <label>contact user</label>
                <input type="text" class="edit" name="contact_user" value="<?php echo $job->job_contact_user; ?>">
            </div>

            <div class="edit">
                <label>contact email</label>
                <input type="text" class="edit" name="contact_email" value="<?php echo $job->job_contact_email; ?>">
            </div>
            <input type="submit" class="button" value="submit" name="submit">
        </form>
    </div>

<?php include 'inc/footer.php'; ?>