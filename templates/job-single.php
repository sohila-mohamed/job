<?php include 'inc/header.php'; ?>

    <div class="container">
        <h2 class=""><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
        <small>posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
        <hr>
        <p class=""><?php echo $job->description; ?></p>
        <ul class="">
            <li class=""><strong>company:</strong><?php echo $job->company; ?></li>
            <li class=""><strong>company:</strong><?php echo $job->salary; ?></li>
            <li class=""><strong>company:</strong><?php echo $job->contact_email; ?></li>
        </ul>
        <br><br>
        <button><a href="index.php">go back</a></button>
        <br><br>

        <div class="well">
            <button class=""><a href="edit.php?id=<?php $job->id; ?>">edit</a></button>

            <form style="display:inline;" method="post" action="job.php">
                <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                <input type="submit" class="button" value="delete">
            </form>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>