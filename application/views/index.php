  

 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

body {
    background-color: #f4f4f4;
}
</style>

<?php



$initial = 5;
$total =  $this->db->count_all('squizes');
$site = base_url();
$pagestotales = ceil($total/$initial);
       

    $teto = $this->model_user->get_all_testlimit(6,0);
$s = $insert_id->id;
$tito = $this->model_user->get_test($s);
          $tet = $this->model_user->get_tree_test();
          $las = $this->model_user->get_last();

?>



<title> <?php echo  $confi->title ; ?>
 </title>



<div class="row">

<div class="right-inner">
<br>
<br>
<br>
<br>
     
</div>
      
                       <center>
					
ads



</center>
    <div class="container"><div class="row infinite">




<?php foreach($teto->result() as $user) : ?>

      <?php 
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

</div></div>    </div>
</div>   


            <div><a class="loadmore" href="javascript:;">More Quizzes... </a></div>




                        <script type ="text/javascript">
    var header = $('.header');
    $(window).scroll(function() {
        if($(window).scrollTop()>100){
            header.addClass('onscroll');
        }
        else{
            header.removeClass('onscroll');
        }
    });
</script>
<script type="text/javascript">
    $('.close').on('click',function (event) {
        event.preventDefault();
        $('.annonces').slideUp(400);
    });
    function cbgetScrollTop(){
        if(typeof pageYOffset!= 'undefined'){
            //most browsers
            return pageYOffset;
        }
        else{
            var B= document.body; //IE \'quirks\'
            var D= document.documentElement; //IE with doctype
            D= (D.clientHeight)? D: B;
            //alert(D.scrollTop);
            return D.scrollTop;
        }

    }
            $('body').imagesLoaded( function() {
            /*var infinite = $('.infinite');
            if(infinite.length){
                $(window).scroll(function () {
                    if ($(window).data('ajaxready') == false) return;
                    cbwinsizey =$(window).height()+20;
                    cbwinsizey = $(document).height() - $(window).height();
                    if(cbgetScrollTop()+100 >= cbwinsizey){

                        url = '<?php base_url() ?>/fb/inoo';
                        var count = $('.infinite').find('.col-md-4').length;

                        if(count < 589){
                            $(window).data('ajaxready', false);
                            $.post( url,{ limit:3, currentcount:count }).done(function(data){
                                infinite.append(data);
                                $(window).data('ajaxready', true);
                            });
                        }
                    }
                });
            }*/
        });
    
    
    $(document).ready(function(){
        $('.loadmore').click(function(){
            var infinite = $('.infinite');
            if(infinite.length){
            if ($(window).data('ajaxready') == false) return;
                cbwinsizey =$(window).height()+20;
                cbwinsizey = $(document).height() - $(window).height();
                if(cbgetScrollTop()+100 >= cbwinsizey){

                    url = 'http:<?php base_url() ?>/fb/inoo';
                    var count = $('.infinite').find('.col-md-4').length;

                    if(count < 589){
                        $(window).data('ajaxready', false);
                        $.ajax({
                            beforeSend:function(){
                                $('.loadmore').append('<i class="fa fa-spinner fa-spin"></i>');
                            },
                            url:url,
                            type:'POST',
                            data:{limit:3, currentcount:count},
                            success:function(data){
                            infinite.append(data);    
                            },
                            error:function(){
                                
                            },
                            complete:function(){
                                $('.fa-spinner').remove();
                                $(window).data('ajaxready', true);
                            }
                        });
                    }
            }
            }
        });
        
        
    });


</script>
</body>
</html>
