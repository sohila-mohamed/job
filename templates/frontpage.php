<?php include 'inc/header.php'; ?>
    
    <div class="">
        <h1>find a job</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">choose category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                    <?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="" value="FIND">
        </form>
    </div>
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>

    <div class="">
        <div>
            <h4><?php echo $job->job_title; ?></h4>
            <p><?php echo $job->description; ?></p>
        </div>
        <div>
            <a class="" href="job.php?id=<?php echo $job->id;?>">view</a>
        </div>
    </div>
    <?php endforeach; ?>

<?php> include 'inc/footer.php'; ?>