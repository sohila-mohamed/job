<?php include 'inc/header.php'; ?>

    <h2 class=""><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
    <small>posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
    <hr>
    <p class=""><?php echo $job->description; ?></p>
    <ul class="">
        <li class=""><strong>company:</strong><?php echo $job->company: ?></li>
        <li class=""><strong>company:</strong><?php echo $job->salary: ?></li>
        <li class=""><strong>company:</strong><?php echo $job->contact_email: ?></li>
    </ul>
    <br><br>
    <a href="index.php">go back</a>
    <br><br>

<?php include 'inc/footer.php'; ?>