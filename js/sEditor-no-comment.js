
$(document).ready(function(){

 var sEditorFunction=function(){ 

   
     var typeOfSelection='block';
     var colorOnOff='Off';

      
      
     var scrImageOrig=$("#cropbox").attr('src'); 
     var scrImageOrigrelative=$("#cropbox").attr('relsrc'); 

      

     
     var splitPath = new Array();
     splitPath = (scrImageOrig.split("/"));
     var sEditorNoOfPathElements=splitPath.length;
     

     var scrImageVar='temp';

     var  selectedColorPicker= {}; 
     selectedColorPicker['r']=255;
     selectedColorPicker['g']=255;
     selectedColorPicker['b']=255;

    var effect;
    var textValue;
    var noColor='on'; 

    

     
     $("#sEditorColorChoser").hide();

      
      $(".sEditorEffectsSampleImages").each(function() {

            
            var currentId=$(this).attr('id');

            

            var sCoderNumberOfImageElements = $('#'+currentId+' div').length;
            

            if(sCoderNumberOfImageElements>6){

              $('#'+currentId).scrollingCarousel({
                        scrollerAlignment : 'horizontal', 
                        autoScroll: true, 
                        looped:false, 
                        autoScrollDirection: 'left'
                      });
            }

            
            $(this).fadeOut();
          });

$("#sEditorDefaultEffectsList").slideDown();


var sliderRange = $("#slider");
var displayRange = $("#slider > div");
var initialValue = 0;
var handle = null;

var updateSliderValue = function (event, ui) {
  displayRange.css('visibility','visible');
  handle = handle || $(".ui-slider-handle", sliderRange);
  displayRange.text(ui.value || initialValue)
  .css(handle.position());

$("#sEditorTextBox textarea").css('font-size',ui.value);

  $('.opacityImage').css({
    'opacity':ui.value/100
    
  })

}


sliderRange.slider({
  min: 0, max: 100,
  slide: updateSliderValue,
  create: updateSliderValue,
  value: initialValue,
  
});



$('#colorSelector').ColorPicker({
  color: '#0000ff',
  onShow: function (colpkr) {
    $(colpkr).fadeIn(500);
    return false;
  },
  onHide: function (colpkr) {
    $(colpkr).fadeOut(500);
    return false;
  },
  onChange: function (hsb, hex, rgb) {
    $('#colorSelector').css('backgroundColor', '#' + hex);
        
        selectedColorPicker=rgb;
      }
    });




$('#cropbox').Jcrop({
  boxWidth: 640, boxHeight: 480,
  onChange: showCoords,
  onSelect: showCoords,
  bgColor:     'white',
  bgOpacity:   .5,
  setSelect:   [ 640, 480, 640, 480 ],

  addClass: 'jcrop-dark' 
                        

                      },function(){
                        jcrop_api = this; 
                        jcrop_api.release(function(){
                          jcrop_api.setOptions({bgOpacity: .9});
                        });
                         jcrop_api.animateTo([ 0,0,0,0],function(){
                            jcrop_api.release();
                          });
                      });

function showCoords(c)
{
  x1=c.x;
  y1=c.y;
  x2=c.x2;
  y2=c.y2;
  w=c.w;
  h=c.h;

  $("#sEditorXpos").val(x1);
  $("#sEditorYpos").val(y1);
  $("#sEditorX2pos").val(x2);
  $("#sEditorY2pos").val(y2);
  $("#sEditorWidthpos").val(w);
  $("#sEditorHeightpos").val(h);
};






        
        $("#sEditorBottomMenu").scrollingCarousel({
          autoScroll: true,
          looped:false,
          height:'80px'
        });

        
        $('.sEditorBottomMenu').click(function(){

         var currentClickedId=$(this).attr('id');
         
         $('.sEditorEffectsSampleImages:visible').fadeOut();

         $('#'+currentClickedId+'List').fadeIn();

       })


        

        

        $('#sEditorSelectAllButton').click(function(){

          
          var cropImgWidth=$("#sEditorImageHolder img").width();
          var cropImgHeight=$("#sEditorImageHolder img").height();

          
          jcrop_api.animateTo([cropImgWidth,cropImgHeight,0,0]);
          return false;
        });

        
        $('#sEditorWidthpos, #sEditorHeightpos').bind('change',function(e){
           e.stopImmediatePropagation();

          var currentWidth=$("#sEditorWidthpos").val();
          var currentHeight=$("#sEditorHeightpos").val();
          
          
          
          
          jcrop_api.setSelect([currentWidth,currentHeight,0,0]);
        })

        $('#sEditorDeselectButton').click(function(e) {
          
          jcrop_api.animateTo([ 0,0,0,0],function(){
            jcrop_api.release();
          });
    
  });

     
     $("#sEditorSelectionCircleButton").click(function(){
        
        typeOfSelection='circle';

        
        $(this).css('background-position', '0px -70px');

        
        $("#sEditorSelectionBlockButton").css('background-position', '0px 0px');

        $(".jcrop-holder div").css("border-radius","50%");

      })

     
     $("#sEditorSelectionBlockButton").click(function(){

        
        typeOfSelection='block';
        
        $(this).css('background-position', '0px -70px');

        
        $("#sEditorSelectionCircleButton").css('background-position', '0px 0px');

        $(".jcrop-holder div").css("border-radius","0%");

      })

     
     $("#sEditorColorPalleteButton").click(function(){

        
        if(colorOnOff=='On'){
          colorOnOff='Off';
          noColor='Off';
          $("#sEditorColorChoser:visible").fadeOut();
          $(this).css('background-position', '0px 0px');
        }else{
          noColor='On';
          colorOnOff='On';
          $("#sEditorColorChoser").fadeIn();
          $(this).css('background-position', '0px -70px');
        }

      })

     
     $("#sEditorRevertButton").click(function(){
      $("#whiteLoading").css('visibility','visible');
      
      
      
      
      $.ajax({
        type: 'POST',
        url: 'actions.php',
        data: 'scrImageVar='+scrImageVar+'&action=delete',
                

                success: function(data){
                 
                  jcrop_api.setImage(scrImageOrig+'?'+Math.random(),function(){  $("#whiteLoading").css('visibility','hidden');});

                },
                error: function(){
                  alert('failed to delete!');
                  $("#whiteLoading").css('visibility','hidden');
                  jcrop_api.setImage(scrImageOrig+'?'+Math.random(),function(){ $("#whiteLoading").css('visibility','hidden'); });
                }
              })
      });

     

     

    

     $("#sEditorApplyButton").click(function(){
       if(typeof(effect) === 'undefined')
     { 
       }else{
       var formValues='x='+x1+'&x2='+x2+'&y='+y1+'&y2='+y2+'&w='+w+'&h='+h;
       var currentSliderValue = $( "#slider" ).slider( "option", "value" );
       var currentTextValue=$("#sEditorTextBox textarea").val();
       $("#whiteLoading").css('visibility','visible');
       

        $.ajax({
        type: 'POST',
        url: 'apply-effect.php',
        data: formValues+'&imgsrc='+scrImageOrig+'&srcImagevar='+scrImageVar+'&typeOfSelection='+typeOfSelection+'&noColor='+noColor+'&slider='+currentSliderValue +'&currentTextValue='+currentTextValue+'&effect='+effect+'&effectCategory='+effectCategory+'&color='+selectedColorPicker['r']+','+selectedColorPicker['g']+','+selectedColorPicker['b'],
        dataType: 'json',

                        success: function(data){
                          
                          
                            if(data.status=='CanNotCreateImage'){
                              alert('Hey, i am not able to work. Give me some rights dude! Thanks! (I can not write in your image folder!)')
                            }else if(data.status=='OK'){
                               
                                
                                
                                
                                 
                               scrImageVar='temp/'+ data.uniqueImageName;
                               jcrop_api.setImage(scrImageVar+'?'+Math.random(),function(){
                                $("#whiteLoading").css('visibility','hidden');
                              });
                            }
                            
                            
                              
                            }
                          })
 }
      });
    





      
      $(".TopSubMenuListDivs").click(function(){

        
        
        effect=$(this).attr('sEffect');
        effectCategory=$(this).attr('sEffectCategory');
        
        $(".jcrop-vline").next('.jcrop-tracker').html('');
          

        
        $("#sEditorCurrentEffect").html('Selected effect: <p>' +effect+ '</p>');

        
        if(effect=='Negative' || effect=='Greyscale' || effect=='Greyscale-out' || effect=='Emboss' )
        {
          $("#sEditorSliderHolder:visible").slideUp();
        }else{
          $("#sEditorSliderHolder:hidden").slideDown();
        }

        if(effect!='Text'){
          $("#sEditorTextBox:visible").slideUp();
        }
        
          $(".TopSubMenuListDivs").each(function() {
            $(this).css('color','#f5f5f5')
          });

        
        $(".imageEffectSampleImageHodlder").each(function() {
          $(this).children('img').css('border','2px solid #626262')

        });

        
        $(this).css('color','#00f0ff')

        
       

          switch (effect){

            
            case 'Pixelate':
                  $("#currentSliderStatusDescription").html('Pixel size');
            break;

            case 'Pixelate-out':
                  $("#currentSliderStatusDescription").html('Pixel size');
             break;

             
            case 'Blur':
              $("#currentSliderStatusDescription").html('Blur density');
            break;
            case 'Blur-out':
             $("#currentSliderStatusDescription").html('Blur density');
            break;
            
            case 'Contrast':
              $("#currentSliderStatusDescription").html('Contrast strength');
            break;

            
            case 'Colorize':
            $("#sEditorColorChoser").fadeIn();
            noColor='On';
            $("#sEditorColorPalleteButton").css('background-position', '0px -70px');
            $("#currentSliderStatusDescription").html('Color opacity');
            break; 

            case 'Text':
              $("#currentSliderStatusDescription").html('Text size');
              $("#sEditorTextBox:hidden").slideDown();
              noColor='On';
              $("#sEditorColorPalleteButton").css('background-position', '0px -70px');
              $("#sEditorColorChoser").fadeIn();
            break;

            default:
            
            break;
          }
        

      });

      
      $(".imageEffectSampleImageHodlder").click(function(){

          
          effect=$(this).attr('sEffect');
          effectCategory=$(this).attr('sEffectCategory');
          
           
          var imgSrcLinkPreview=$(this).children('img').attr('src');

          
          $("#sEditorTextBox:visible").slideUp();


          
          if(typeOfSelection=='circle'){
            typeOfSelection='block';
            $("#sEditorSelectionBlockButton").css('background-position', '0px -70px');
            $("#sEditorSelectionCircleButton").css('background-position', '0px 0px');
          }
 

          
          noColor='Off';
          
          $("#currentSliderStatusDescription").html('Effect Opacity');
          

          
          $("#sEditorCurrentEffect").html('Selected effect:<p>' + effect + '</p>');

          
          $(".TopSubMenuListDivs").each(function() {
            $(this).css('color','#f5f5f5')
          });

          
          if(effectCategory!='compiledsEffects')
          {
            $("#sEditorSliderHolder:hidden").slideDown();
            $("#currentSliderStatusDescription").html('Effect Opacity');
          }else{
            $("#sEditorSliderHolder").slideUp();
            
            
            var cropImgWidth=$("#sEditorImageHolder img").width();
            var cropImgHeight=$("#sEditorImageHolder img").height();

            
            jcrop_api.animateTo([ cropImgWidth,cropImgHeight,0,0]);

           
           
          }

          
          if(effectCategory !='simplesEffects' ){
            
            var currentSliderValue = $( "#slider" ).slider( "option", "value" );
            $(".jcrop-vline").next('.jcrop-tracker').html('<img class="opacityImage pacity05" src='+imgSrcLinkPreview+' width="100%" height="100%" />')
            $('.opacityImage').css({
                  'opacity':currentSliderValue/100
                })
          }else{
             $(".jcrop-vline").next('.jcrop-tracker').html('');
          }
          if(effectCategory == 'compiledsEffects'){
            $(".jcrop-vline").next('.jcrop-tracker').html('');
          }

          
        
        $(".imageEffectSampleImageHodlder").each(function() {
          $(this).children('img').css('border','2px solid #626262')

        });
        
        
        $(this).children('img').css('border','2px solid #00f0ff')

      })

      

      

          var saveOption;

          
          $("#saveOverwrite").click(function(){
            
            $('#saveOverwrite p').css('color','#00f0ff')

            $("#saveNew").slideUp(function(){

                saveOption='Overwrite';

                
                $("#sEditorSave-CancelButtonHolder").slideDown();
            });

          });

          

          
          $("#saveNew").click(function(){
            
            $('#saveNew p').css('color','#00f0ff')

            $("#saveOverwrite").slideUp(function(){

                saveOption='SaveNew';

                
                $("#sEditorSave-CancelButtonHolder,#sEditorSave").slideDown();
            });

          });

          

          
          $("#sEditorCancelBtn").click(function(){
            $("#saveOverwrite:hidden, #saveNew:hidden").slideDown(); 
            $('#saveNew p, #saveOverwrite p').css('color','#f5f5f5');
            $("#sEditorSave-CancelButtonHolder,#sEditorSave").slideUp();
          })

           
          $("#sEditorSaveBtn").click(function(){
            var sEditorNewImageName=$("#newImageName").val();
            

            if(saveOption=='SaveNew'){
              
              window.location='save-image.php?saveOption='+saveOption+'&scrImageVar='+scrImageVar+'&scrImageOrig='+scrImageOrig+'&sEditorNewImageName='+sEditorNewImageName;

            }else{
 
            
                  $.ajax({
                    type: 'POST',
                    url: 'save-image.php?saveOption='+saveOption+'&scrImageVar='+scrImageVar+'&scrImageOrig='+scrImageOrig+'&sEditorNewImageName='+sEditorNewImageName,
                   
                    timeout:7000, 
                    

                              success: function(data){
                                   
                                    if(data=='Success'){
                                      alert('Original image has been overwritten!')
                                    }else{
                                      alert('I am not able to overwrite original image!')
                                    }

                                  },
                              error: function(data){
                                alert('Currently i am not able to save this file. Please try later!')
                              }
                          })
          }




          })

      

      
      $("#newImageName").click(function(){
       if($(this).val()=='New image name'){
        $(this).val('');
       }
      })

    }();


    


  });

