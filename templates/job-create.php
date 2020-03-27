<?php include 'inc/header.php'; ?>
     
    <h2 class="">create job listing</h2>
    <form method="post" action="create.php">
        <div class="">
            <label>company</label>
            <input type="text" class="" name="company">
        </div>

        <div class="">
            <label>category</label>
            <select class="" name="category">
            <option value="0">choose category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                    <?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="">
            <label>job title</label>
            <input type="text" class="" name="job_title">
        </div>

        <div class="">
            <label>description</label>
            <textarea class="" name="description"></textarea>
        </div>

        <div class="">
            <label>location</label>
            <input type="text" class="" name="location">
        </div>

        <div class="">
            <label>salary</label>
            <input type="text" class="" name="salary">
        </div>

        <div class="">
            <label>contact user</label>
            <input type="text" class="" name="contact_user">
        </div>

        <div class="">
            <label>contact email</label>
            <input type="text" class="" name="contact_email">
        </div>
        <input type="submit" class="" value="submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>