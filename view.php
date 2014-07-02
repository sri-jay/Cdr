<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
$(document).ready(function(){

    // $('#0_sidebar').sidebar('toggle');
    $('.tggle_sdbr').click(function (){

        $('#sidebar').sidebar('toggle')

    });


});

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
             $('html,body').animate({
             scrollTop: target.offset().top,
             scrollLeft: target.offset().left,
            }, 250);
            return false;
            }
        }
    });
});

</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.12.0/javascript/semantic.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.12.0/css/semantic.min.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/json2/20130526/json2.min.js"></script>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    body{
        margin:0;
        top:0;
        font-family:sans-serif;
        width:100%;
    }


    #editor { 
        position: absolute;
        width:100%;
        height:100%;
        right:50%;
        bottom: 0;
        left: 0;
        float:left;
    }
    
    #scripting_pane { 
        position: absolute;
        width:100%;
        height:100%;
        top:100%;
        right:50%;    
        bottom: 0;
        left: 0;
        float:left;
    }

    iframe{
        width:100%;
        border:none;
        float:left;
        overflow:hidden;
    }

    #page
    {
        margin-left:50%;
        -webkit-font-smoothing: antialiased;
        -webkit-transition: all 0.5s;
        -webkit-transition-property: all;
        -webkit-transition-duration: 0.5s;
        -webkit-transition-timing-function: initial;
        -webkit-transition-delay: initial;
        -webkit-filter: brightness(0.5);
        overflow:hidden;
        width:100%;
        position: absolute;    
        bottom:0;
        left:50%;
        float:left;
        height:100%;
    }

    #page:hover
    {
        -webkit-transition: all 0.5s;
        -webkit-transition-property: all;
        -webkit-transition-duration: 0.5s;
        -webkit-transition-timing-function: initial;
        -webkit-transition-delay: initial;
        -webkit-filter: none;
        overflow:hidden;
        width:100%;
        position: absolute;
        bottom:0;
        left:50%;
        float:left;
        height:100%;
    }

    .tggle_sdbr
    {
        opacity:0.5;
    }

    .tggle_sdbr:hover
    {
        opacity:1;
    }
   
    ::-webkit-scrollbar
    {
      width: 6px;  /* for vertical scrollbars */
      height: 6px; /* for horizontal scrollbars */
      border-radius:3px;
    }
    ::-webkit-scrollbar-track
    {
      background: grey;
    }

    ::-webkit-scrollbar-thumb
    {
       background: white;
    }
</style>

</head>

<body>
<div class="ui vertical right labeled icon small buttons" style="z-index:200;position:fixed;top:50%;right:4%">

     <div href="#page"class="ui red button" id="goto_page">
        <a href="#editor">HTML Editor</a>
        <i class="icon code"></i>
    </div>
     <div href="#page"class="ui blue button" id="goto_scripting_pane">
        <a href="#scripting_pane">Scripting Pane</a>
        <i class="icon terminal"></i>
    </div>
    <div href="#page"class="ui green button">
        <a id="launch" href="#page">Run!</a>
        <i class="icon play"></i>
    </div>
</div>
<div class="ui purple top sidebar menu " id="sidebar">

    <a class="header item">
        <b>CDR.io</b>
    </a>
    <div class="ui item" id="url"></div>

</div>

<div class="ui orange very small launch attached inverted button tggle_sdbr"style="z-index:200;position:fixed;top:90%;left:4%">
    <i class="icon large terminal"></i>
</div>



<!--Left sidebar ends here-->

<!-- Editor div begins here -->
<div id="editor">
</div>
<!-- Scripting pane. -->
<div id="scripting_pane">
</div>
<!-- Editor ends here -->
<!-- Target Iframe is loaded here -->
<iframe id="page" src="about:blank">
</iframe>
<!-- End of html elements -->

<!-- SCRIPS AT BOTTOM TO INCREASE RENDER SPEED -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.01/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts_.js"></script>

<!-- END SCRIPTS -->

</body>
</html>
