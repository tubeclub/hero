$(document).ready(function()
{StartTipTip();ActualiseStatDev();ShowElements();MaxHeightRight(200);MaxHeightRight(600);MaxHeightRight(1000);MaxHeightRight(2500);ResizeDiv();$(window).resize(function(){ResizeDiv();ActualiseStatDev();MaxHeightRight();});$(function(){$(window).scroll(function(){ActualiseStatDev();ScrollHome();});});$(".topbarre_lang_list").bind("clickoutside",function(e)
{if(LangMenu_show==true&&e.target.className.indexOf("topbarre_lang")==-1&&e.target.className.indexOf("tpl_long")==-1&&e.target.className.indexOf("tpl_short")==-1)
{LangMenu();}});$("#popin").bind("clickoutside",function(e)
{if(popin_show==true&&e.target.className=='popin_bg')
{PopinClose();}});if($('.home_trend_imgtest').length)
{setTimeout(function()
{$('.home_trend_l h2').animate({opacity:1},250,function()
{$('.home_trend_go').animate({opacity:1},250,function()
{$('.home_trend_imgtest').animate({opacity:1},500);});});},500);}});function MiamCookie(ok)
{if(ok==true||$(window).width()<600)
{$('.cookie').hide();$('#load').load('/load.cookie.php');}}
var last_type_popin=false;function PopinClose()
{$("#popin_bg").hide();$("#popin").hide(0);$('#popin_bg').css('opacity',0);$("#popin_content").html('');$('.all').css('top','0px');$('.all').removeClass('all_fixe');$(document).scrollTop(popin_scroll);popin_show=false;}
var Quizz_already=false;function Quizz(idtest,idquizz,url_redirect)
{if(Quizz_already==false)
{Quizz_already=true;$('#load').load('/load.quizz.php?test='+idtest+'&quizz='+idquizz,function()
{document.location.href=url_redirect;});}}
var popin_show=false;var popin_scroll=false;function Popin(type,url)
{last_type_popin=type;popin_show=true;scrolltop=Scroll();popin_scroll=Scroll();$('.all').addClass('all_fixe');$('.all').css('top',(scrolltop)*(-1)+'px');$('#popin_bg').css('min-height',HauteurEcran()+'px');$('#popin_bg').show();$('#popin').show();$(document).scrollTop(0);$('#popin').addClass('popin_loading');$('#popin').css('opacity','0.25');$('#popin_bg').css('opacity',1);$('#popin_content','#popin').show(0);$('#popin_content').load(url,function()
{$('#popin').removeClass('popin_loading');$('#popin').animate({opacity:1},400);if(type=='again')
{$('#popin').css('box-shadow','none');$('#popin').css('background-color','transparent');}
else
{$('#popin').css('margin-top','70px');$('#popin').css('width','560px');$('#popin').css('box-shadow','0 1px 4px 1px rgba(0,0,0,.275)');$('#popin').css('background-color','#FFFFFF');}});}
var ScrollHome_lock=false;function ScrollHome(force)
{if(force&&load_home!=false)
{$('#aftermore_bt'+force).addClass('aftermore_bt_loaging');ScrollHome_lock=true;$('#load_home_'+ load_home).load('/load.scrollfeed.php?where=home&time_start='+ load_home,function()
{$('#aftermore_bt'+force).hide();ResizeDiv();ScrollHome_lock=false;});}}
var LangMenu_show=false;function LangMenu()
{if(LangMenu_show==false)
{LangMenu_show=true;$('.topbarre_lang_select').addClass('topbarre_lang_select_select');$('.topbarre_lang_list').slideDown(250);$('.topbarre_lang_select_arrow').attr('src','http://speedquiizz.com/assets/images/icon-lang-arrow-select.png');}
else
{LangMenu_show=false;$('.topbarre_lang_select').removeClass('topbarre_lang_select_select');$('.topbarre_lang_list').slideUp(250);$('.topbarre_lang_select_arrow').attr('src','http://speedquiizz.com/assets/images/icon-lang-arrow-select.png');}}
function ShowResultAgain()
{$('#end').slideUp(500);$('#result').slideDown(500);}
var AfterShare_once=false;function AfterShare()
{if(AfterShare_once==false)
{AfterShare_once=true;$('#end').slideDown(500);$('#result').slideUp(500);}}
function ShowMoreAfter(nb)
{$('#aftermore_bt'+nb).slideUp(500);$('#ListeVignettesAfter_more'+nb).slideDown(500);var nb_next=nb+ 1;if($('#aftermore_bt'+nb_next).length)
{$('#aftermore_bt'+nb_next).slideDown(500);}}
var PopupShare_open=false;var PopupShare_send=false;function PopupShare(url,reference)
{PopupShare_open=true;var w=680;var h=320;var left=(screen.width/2)-(w/2);var top=150;var win=window.open(url,'Partager','toolbar=no, status=no, menubar=no, width='+w+', height='+h+', top='+top+', left='+left);var winTimer=window.setInterval(function()
{},200);if(PopupShare_send==false)
{PopupShare_send=true;$('#load').load('/load.share.php?result='+reference);}}
var ClicP_already=false;function ClicP(id)
{if(ClicP_already==false)
{ClicP_already=true;$('#load').load('/load.clic.php?id='+id);}}
function ResizeDiv()
{if($('.vignette_a_in').length)
{var width_vignette_in=$('.vignette_a_in').width();if($(window).width()<=500)width_vignette_in=width_vignette_in*0.8;$('.vignette_a_in').css('height',width_vignette_in+'px');}}
function MaxHeightRight(timeoutstart)
{if(timeoutstart==false)timeoutstart=1;setTimeout(function()
{if($('.right').length)
{var height_left=$('.left').innerHeight();$('.right').css('max-height',height_left+'px');}},timeoutstart);}
function ShowElements()
{if($('.test_bt_arrow').length)
{$('.test_bt_arrow').delay(2000).animate({opacity:.75,marginTop:-0},500);}}
function Progress(time_progress)
{if(time_progress==false)time_progress=5000;$('.bt_action_can_progress').addClass('bt_action_progress');if($('.test_bt_fb').length)
{$('.test_bt_fb').attr('src','/design/bt-loading.gif');$('.test_bt_fb').css('width','59px');$('.test_bt_fb').css('margin-right','5px');$('.test_bt span').hide();$('.test_bt i').show();$('.test_bt_loader').show();$('.test_bt_loader').delay(250).animate({width:'100%'},time_progress);}}
function ProgressAgain()
{$('.bt_again').addClass('bt_again_progress');}
function ProgressAgain2()
{$('.popin_again_yes_bt, .popin_again_no_bt').css('opacity',0.5);}
function ActualiseStatDev()
{if($('.info_dev').length)
{$('.info_dev').text('TP('+ $('.in').width()+') L('+ $(window).width()+') H('+ HauteurEcran()+') S('+ Scroll()+')');}}
var SaveQuizzNb='';function FunctionSaveQuizzNb(nb)
{SaveQuizzNb='/'+nb;}
function Scroll()
{return $(document).scrollTop();}
function HauteurEcran()
{return $(window).height();}
function HauteurPage()
{return $(document).height();}
function StartTipTip()
{$(".tiptipt").tipTip({defaultPosition:"top",maxWidth:"auto",edgeOffset:0});$(".tiptipr").tipTip({defaultPosition:"right",maxWidth:"auto",edgeOffset:0});$(".tiptipl").tipTip({defaultPosition:"left",maxWidth:"auto",edgeOffset:0});$(".tiptipb").tipTip({defaultPosition:"bottom",maxWidth:"auto",edgeOffset:0});}