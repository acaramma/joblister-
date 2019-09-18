<?php include_once 'config/init.php'; ?>

<?php 
$jobs = new Jobs;
$template = new Template('templates/frontpage.php');

$template->title = 'Latests Jobs';
$template->jobs = $jobs->GetAllJobs();

echo $template;