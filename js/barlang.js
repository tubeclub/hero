$(document).ready(function()
{ActualiseStatDev();ShowElements();MaxHeightRight(200);MaxHeightRight(600);MaxHeightRight(1000);MaxHeightRight(2500);MaxHeightRight(3500);MaxHeightRight(5000);MoveTaboola2();ResizeDiv();$(window).resize(function(){ResizeDiv();ActualiseStatDev();MaxHeightRight();MoveTaboola2();});$(function(){$(window).scroll(function(){ActualiseStatDev();ScrollHome();});});$(".topbarre_lang_list").bind("clickoutside",function(e)
{if(LangMenu_show==true&&e.target.className.indexOf("topbarre_lang")==-1&&e.target.className.indexOf("tpl_long")==-1&&e.target.className.indexOf("tpl_short")==-1)
{LangMenu();}});$("#popin").bind("clickoutside",function(e)
{if(popin_show==true&&e.target.className=='popin_bg')
{PopinClose();}});if($('.home_trend_imgtest').length)
{setTimeout(function()
{$('.home_trend_l h2').animate({opacity:1},250,function()
{$('.home_trend_go').animate({opacity:1},250,function()
{$('.home_trend_imgtest').animate({opacity:1},500);});});},500);}});function MoveTaboola2()
{if($(window).width()<=500)$(".taboola_below_out").appendTo(".taboola_mobile");else $(".taboola_below_out").appendTo(".taboola_desktop");}
function MiamCookie(ok)
{if(ok==true||$(window).width()<600)
{$('.cookie').hide();$('#load').load('/load.cookie.php');}}
var last_type_popin=false;function PopinClose()
{$("#popin_bg").hide();$("#popin").hide(0);$('#popin_bg').css('opacity',0);$("#popin_content").html('');$('.all').css('top','0px');$('.all').removeClass('all_fixe');$(document).scrollTop(popin_scroll);popin_show=false;}
var Quizz_already=false;function Quizz(idtest,idquizz,url_redirect)
{if(Quizz_already==false)
{Quizz_already=true;$('#load').load('/load.quizz.php?test='+idtest+'&quizz='+idquizz,function()
{document.location.href=url_redirect;});}}
var popin_show=false;var popin_scroll=false;var popin_already_open_once=false;function Popin(type,url)
{last_type_popin=type;popin_show=true;scrolltop=Scroll();popin_scroll=Scroll();$('.all').addClass('all_fixe');$('.all').css('top',(scrolltop)*(-1)+'px');$('#popin_bg').css('min-height',HauteurEcran()+'px');$('#popin_bg').show();$('#popin').show();$(document).scrollTop(0);$('#popin').addClass('popin_loading');$('#popin').css('opacity','0.25');$('#popin_bg').css('opacity',1);$('#popin_content').css('border-radius','0px');$('#popin_content','#popin').show(0);if(type=='follow')
{$('#popin').removeClass('popin_loading');$('#popin').animate({opacity:1},400);$('#popin').css('border-radius','6px');}
else
{popin_already_open_once=true;$('#popin_content').text('');$('#popin_content').load(url,function()
{$('#popin').removeClass('popin_loading');$('#popin').animate({opacity:1},400);if(type=='again')
{$('#popin').css('box-shadow','none');$('#popin').css('background-color','transparent');}
else if(type=='follow')
{$('#popin').css('border-radius','6px');}
else
{$('#popin').css('margin-top','70px');$('#popin').css('width','560px');$('#popin').css('box-shadow','0 1px 4px 1px rgba(0,0,0,.275)');$('#popin').css('background-color','#FFFFFF');}});}}
var ScrollHome_lock=false;function ScrollHome(force)
{if(force&&load_home!=false)
{$('#aftermore_bt'+force).addClass('aftermore_bt_loaging');ScrollHome_lock=true;$('#load_home_'+ load_home).load('/load.scrollfeed.php?where=home&time_start='+ load_home,function()
{$('#aftermore_bt'+force).hide();ResizeDiv();ScrollHome_lock=false;});}}
var LangMenu_show=false;function LangMenu()
{if(LangMenu_show==false)
{LangMenu_show=true;$('.topbarre_lang_select').addClass('topbarre_lang_select_select');$('.topbarre_lang_list').slideDown(250);$('.topbarre_lang_select_arrow').attr('src','/img/icon-lang-arrow-select-white.png');$('.topbarre_lang_select_arrow').addClass('tplsa_select');}
else
{LangMenu_show=false;$('.topbarre_lang_select').removeClass('topbarre_lang_select_select');$('.topbarre_lang_list').slideUp(250);$('.topbarre_lang_select_arrow').attr('src','/img/icon-lang-arrow.png');$('.topbarre_lang_select_arrow').removeClass('tplsa_select');}}
function ShowResultAgain()
{$('#end').slideUp(0);$('#inside2').slideDown(0,function()
{MaxHeightRight();});}
var AfterShare_once=false;function AfterShare()
{if(AfterShare_once==false)
{AfterShare_once=true;if($('#PopUpFollow').length&&popin_already_open_once==false)
{}
if($('#end').length)
{$('#inside2').slideUp(0);$('.taboola_desktop').hide();$('#end').slideDown(0,function()
{MaxHeightRight();});}}}
function ShowMoreAfter(nb)
{$('#aftermore_bt'+nb).slideUp(500);$('#ListeVignettesAfter_more'+nb).slideDown(500);var nb_next=nb+ 1;if($('#aftermore_bt'+nb_next).length)
{$('#aftermore_bt'+nb_next).slideDown(500);}}
var PopupShare_open=false;var PopupShare_send=false;function PopupShare(url,reference)
{PopupShare_open=true;var w=680;var h=320;var left=(screen.width/2)-(w/2);var top=150;var win=window.open(url,'Partager','toolbar=no, status=no, menubar=no, width='+w+', height='+h+', top='+top+', left='+left);var winTimer=window.setInterval(function()
{if(win.closed!==false&&PopupShare_open==true)
{AfterShare();PopupShare_open=false;}},200);if(PopupShare_send==false)
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
var ShowMoreClassement_loading=false;function ShowMoreClassement(id,nb_start,nb_question_me)
{if(ShowMoreClassement_loading==false)
{ShowMoreClassement_loading=true;$('.my_result_more_icon').attr('src','/design/bt-loading.gif');$('.my_result_more_icon').css('width','56px');$('#class_next'+nb_start).load('/load.classement.php?id='+id+'&nb_start='+nb_start+'&nb_question_me='+nb_question_me,function()
{ShowMoreClassement_loading=false;$('#class'+nb_start).hide();});}}
var PrepareLoadingPts_nb=0;function PrepareLoadingPts()
{setTimeout(function()
{if(PrepareLoadingPts_nb==0)$('#plt_pts').text('');else if(PrepareLoadingPts_nb==1)$('#plt_pts').text('.');else if(PrepareLoadingPts_nb==2)$('#plt_pts').text('..');else if(PrepareLoadingPts_nb==3)$('#plt_pts').text('...');PrepareLoadingPts_nb=PrepareLoadingPts_nb+ 1;if(PrepareLoadingPts_nb>=4)PrepareLoadingPts_nb=0;PrepareLoadingPts();},220);}
function Progress(time_progress)
{$(document).scrollTop();$('.full_loading').show();if(time_progress)$('#full_loading_already').hide();else $('#full_loading_no').hide();MaxHeightRight();MaxHeightRight(500);PrepareLoadingPts();}
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
{}