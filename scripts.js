$(document).ready(function() {


    /*Create Editor object, bind to div id*/
    var editor = ace.edit("editor"); 

    /*Set default parameters*/
    editor.setFontSize(14);          
    editor.setTheme("ace/theme/tomorrow");
    editor.getSession().setMode("ace/mode/html");

    /*Setting an initial message to put in the browser*/
    var initial_message_html = ["<html>","<head>","<style>","body{margin:0;background:grey;font-family:sans-serif;font-size:200px;color:white;}","</style>","</head>","<body>","<div>","<p>Type Here</p>","</div>","</body>","</html>"] ;

    /*Writing the code into the editor*/
    editor.getSession().getDocument().insertLines(0,initial_message_html);

    /*Getting code from editor*/
    var append_init = editor.getSession().getDocument().getValue();

    /*Writing obtained value to iframe*/
    $('#page').contents().find('body').html(append_init);
    
    
    
    /*Listening for events on page, if change, reflet in iframe*/
    //Key change
    editor.on("change",function(){

        var document_status = "Save<i class='attention icon'></i>"
        $('#save_document').html(document_status);
        var append = editor.getSession().getDocument().getValue();
        $('#page').contents().find('body').html(append);

    });

    //On font size change change font size in editor
    $('#font_size').change(function() {

        var font_size = $(this).val();
        console.log("Font Size change : "+font_size);
        editor.setFontSize(font_size);
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
        console.log("Language change : "+language)
        editor.getSession().setMode("ace/mode/"+language);

    }); 
  

    function get_document(editor)
    {
        $.get( "http://emptybrains.net/sriduth/cdr/api.php?method=getDocument")
          .success(function(data) {
            
             editor.getSession().getDocument().insertLines(0,data["2"]);

          });

    }

    $("#save_document").click(function(){

        var data_ = editor.getSession().getDocument().getAllLines();

        alert(data_);

        $.get( "http://emptybrains.net/sriduth/cdr/api.php?method=storeDocument&code="+data_)
          .success(function(data) {
            
            var document_status = "Saved!<i class='checkmark sign icon'></i>";
            $('#save_document').html(document_status);
            // Displaying a modal to get URl
            var modal_contents = "<div class=''>"+data+"</div>";
            $('#confirm--modal').html(modal_contents)
            $('#confirm_modal').modal('show');
          });
    
    }); 
    
   });//End of $(document).ready();
