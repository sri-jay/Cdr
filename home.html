<?php
session_start();

if(!isset($_SESSION['id']))
{
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.12.0/javascript/semantic.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.12.0/css/semantic.min.css" rel="stylesheet">
<script sr="http://cdnjs.cloudflare.com/ajax/libs/json2/20130526/json2.min.js"></script>
<script>

</script>
<script>
$(document).ready(function(){

    // $('#0_sidebar').sidebar('toggle');
    $('.tggle_sdbr').click(function (){

        $('#sidebar').sidebar('toggle')

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

});
</script>
<script>

    

</script>

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
/*        top:43px;
*/      right:50%;
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
/*        top:43px;
*/     
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
<div class="ui inverted large horizontal red top sidebar  menu" id="topbar">

<div class="ui segment">
    <div class="ui mini red inverted fluid input">
        <input class='ui fluid input' id="view_code" value="" onClick="this.select();" readonly>
    </div>
</div>
    
</div>
<div class="ui purple sidebar vertical menu " id="sidebar">

    <a class="header item">
        <b>CDR.io</b>
    </a>
    <div class="item"><strong>Languages:</strong><i class="extra large code icon"></i></div>
    <div class="ui item vertical">
        <input class="lang_check ui radio checkbox" type="radio" name="lang" value="text"><label>Text</label>
    </div>
    <div class="ui item vertical">
        <input class="lang_check ui radio checkbox" type="radio" name="lang" value="python"><label>Python</label>
    </div>
    <div class="ui item vertical">
        <input class="lang_check ui radio checkbox orange" type="radio" name="lang" value="c_cpp"><label>C|C</label>  
    </div>
    <div class="ui item vertical">
        <input class="lang_check ui radio checkbox" type="radio" name="lang" value="html"><label>HTML</label>  
    </div>

     <div class="ui item vertical">
        <input class="lang_check ui radio checkbox" type="radio" name="lang" value="javascript"><label>JavaScript</label>  
    </div>

    <div class="ui item vertical fluid icon">
        <label >Font Size:</label>
        <select class="ui input" id="font_size">
            <option value="12">12px</option>
            <option value="14">14px</option>
            <option value="16">16px</option>
            <option value="18">18px</option>
            <option value="20">20px</option>
        </select>
    </div>
    <div class="item"><strong>Themes:</strong><i class="extra large home icon"></i></div>

    <div class="ui item vertical">
        <input class="ui_check ui radio checkbox" type="radio" name="theme" value="monokai"><label>Monokai</label>  
    </div>
    <div class="ui item vertical">
        <input class="ui_check ui radio checkbox" type="radio" name="theme" value="merbivore"><label>Merbivore</label>  
    </div>
    <div class="ui item vertical">
        <input class="ui_check ui radio checkbox" type="radio" name="theme" value="tomorrow"><label>Tomorrow</label>  
    </div>

    <!-- Disabling font sizes for a while -->
    <!--     <div class="item"><strong>Font Size:</strong><div id="font_size" class="ui mini input"><input type="number" name="size" min="1" value=""></div></div> -->

    <div class="ui small right labeled fluid icon button blue"><a href="index.php">New Document</a><i class="text file icon"></i></div>
    <div id="save_document" class="ui labeled fluid small right icon button green">Save<i class="save icon"></i></div>
    

    <div class="bottom">
        <div id="on_gen" class="ui small right labeled fluid icon button orange tggle_sdbr">CLOSE<i class="checkmark icon"></i></div>
    </div>

</div>

<div class="ui blue very small launch attached inverted button tggle_sdbr"style="z-index:200;position:fixed;top:90%;left:4%">
    <i class="icon large terminal"></i>
</div>

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


<!--Left sidebar ends here-->

<!-- Editor div begins here -->
<div id="editor">
</div>
<div id="scripting_pane">
</div>
<!-- Editor ends here -->
<!-- Target Iframe is loaded here -->
<iframe id="page"  src="about:blank">
</iframe>

<!-- End of html elements -->

<!-- SCRIPS AT BOTTOM TO INCREASE RENDER SPEED -->
<script src="ace/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
   $(document).ready(function() {


    /*Create Editor object, bind to div id*/
    var editor = ace.edit("editor"); 
    var scripting_pane = ace.edit("scripting_pane");

    /*Set default parameters for HTML pane*/
    editor.setFontSize(16);          
    editor.setTheme("ace/theme/merbivore");
    editor.getSession().setMode("ace/mode/html");

    /*Setting Defaults for Scripting pane*/
    scripting_pane.setFontSize(16);
    scripting_pane.setTheme("ace/theme/monokai");
    scripting_pane.getSession().setMode("ace/mode/javascript");

    /*Setting an initial message to put in the browser*/
    var initial_message_html = ["<html>","<head>","<style>","body{margin:0;background:grey;font-family:sans-serif;font-size:200px;color:white;}","</style>","</head>","<body>","<div>","<p>Hello! and thanks for looking at my project!</p>","<p>We are working on improving our Database design, therefore documents are not saved, but everything else works for now!</p>","<p>You can reach me at sri_j4y(at)outlook</p>","<p>Thanks!</p>","</div>","</body>","</html>"] ;
    var initial_message_js   = ["function hello(){","","   alert('Hello World!');","  //You can enter scipts here","}"];

    /*Writing the code into the editor*/
    editor.getSession().getDocument().insertLines(0,initial_message_html);
    scripting_pane.getSession().getDocument().insertLines(0,initial_message_js)
    
    /*Getting code from editor*/
    var append_init = editor.getSession().getDocument().getValue();

    /*Writing obtained value to iframe*/
    $('#page').contents().find('body').html(append_init);
    //$('#page').contents().find('head').append(jQuery);

    /*Writing jQuery src into iframe*/
    var jQuery = document.createElement("script");
    jQuery.setAttribute("type","text/javascript");
    jQuery.setAttribute("src","http://code.jquery.com/jquery-1.10.2.min.js")
    $('#page').contents().find('head')[0].appendChild(jQuery);
    /*jQuery*/ 
    
    /*Listening for events on page, if change, reflet in iframe*/
    //Key change
    editor.on("change",function(){

        var document_status = "Save<i class='attention icon'></i>"
        $('#save_document').html(document_status);

        var append = editor.getSession().getDocument().getValue();
        $('#page').contents().find('body').html(append); 

    });

    

    // $("#goto_page").click(reposition());
    // $("goto_scripting_pane").click(reposition());



    $("#launch").click(function(){
        //Reposition and focus the page before executing

        console.log("Bringing to focus");
        setTimeout(function (){

            var data = scripting_pane.getSession().getDocument().getValue();
            var append = editor.getSession().getDocument().getValue(); 

            var script_ = document.createElement("script");
            script_.setAttribute("type","text/javascript");
            script_.innerHTML = data;

            $('#page').contents().find('head')[0].appendChild(script_);
            $('#page').contents().find('body').html(append);

        },1500);
        

    });
  
    // $("#on_gen").click(function(){

    //     var append_ = editor.getSession().getDocument().getValue();
          
    //     var $frame = $('#page');
      
    //         var doc = $frame[0].contentWindow.document;
    //         var $body = $('body',doc);
    //         $body.html(append_);

    // });
    //On font size change change font size in editor
    $('#font_size').change(function() {

        var font_size = $(this).attr('value');

        alert("Font Size change : "+parseInt(font_size));
        document.getElementById('editor').style.fontSize=font_size;   

    });

    //on theme change apply new theme
    $('.ui_check').click(function() {

        var theme = $(this).val();
        console.log("Theme change : "+theme);
        editor.setTheme("ace/theme/"+theme);

    });

    //on language change, set editor params
    $('.lang_check').click(function(){

        var language = $(this).val();
        console.log("Language change : "+language);
        editor.getSession().setMode("ace/mode/"+language);

    }); 
  


    $("#save_document").click(function(){

        var data_ = editor.getSession().getDocument().getAllLines();
        data_ = data_.toString();
        var script_data_ = scripting_pane.getSession().getDocument().getAllLines();
        script_data_ = script_data_.toString();

        alert(data_);
        alert(script_data_);

        $.get( "http://emptybrains.net/sriduth/cdr/api.php?method=storeDocument&code="+data_+"&script_data="+script_data_)
          .success(function(data) {
            
            // var modal_contents = "<div class=>"+data+"</div>"+"<button class='ui button' id='close_modal'>CLOSE</button>";
            // $('#confirm_modal').html(modal_contents)
            var document_status = "Saved!<i class='checkmark sign icon'></i>";
            $('#save_document').html(document_status);

            alert(data);
            
            var params = window.location.search.replace( "?", "?" );
            params = "http://emptybrains.net/sriduth/cdr/view.php"+params;

            var url = document.getElementById("view_code");
            url.setAttribute("value",params);
            $('#topbar').sidebar('show');
          });
    
    }); 

    
   });//End of $(document).ready();

   // editor.createEditSession(,html);
    
</script>
<!-- END SCRIPTS -->

</body>
</html>
