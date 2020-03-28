<?php include 'inc/header.php'; ?>
    
    <div class="container">
        <div class="main">
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
                <input type="submit" class="button" value="FIND">
            </form>
        </div>
    
        <h3><?php echo $title; ?></h3>

        <?php foreach($jobs as $job): ?>
        <div class="detailes">
            <div>
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo $job->description; ?></p>
                <button class="view"><a href="job.php?id=<?php echo $job->id;?>">view</a></button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

<?php include 'inc/footer.php'; ?>