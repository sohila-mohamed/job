
<?php include_once 'config/int.php'; ?>
<?php
$job = new Job;

if(isset($_POST['del_id'])){
    $del_id = $POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'job deleted', 'succes'); 
    } else {
        redirect('index.php', 'job not deleted', 'error'); 
    }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET[id] : null;

$template->job = $job->getJob($job_id);

echo $template;