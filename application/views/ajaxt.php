<body data-pinterest-extension-installed="cr1.39.1">   

 <?php



  $currentcount = $_POST["currentcount"];   
  $limit = $_POST["limit"];
 

 $tet = $this->model_user->get_all_testlimit($limit,$currentcount);

foreach($tet->result() as $user) : 

    

    $name = $user->titre ;
            $name = str_replace(' ', '_', $name);



?>

     
                        			<div class=" quizitem quiz-id-111 col-xs-12 col-sm-4 col-md-4 quiz-container share">
	<div class="quiz-wrapper">
		<div class="quiz-thumb lazyload">
			<a href="<?=base_url()?>fb/test/<?php echo $user->id ?>/?id=<?php echo $user->id ?>">
				<img class="quiz-picture" alt="<?php echo $user->titre ?>" src="<?=base_url()?>assets/img/<?php echo $user->id ?>/<?php echo $user->background ?>">
			</a>
		</div>
		<div class="quiz-question">
			<h2 class="quiz-title">
				<a class="quiz-link" href="<?=base_url()?>fb/test/<?php echo $user->id ?>/?id=<?php echo $user->id ?>" title="<?php echo $user->titre ?>">
<?php echo $user->titre ?>				</a>
			</h2>
		</div>
		
	</div>
</div>
    

     <?php endforeach; ?>
	


