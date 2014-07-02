$(document).ready(function() {


    /*Create Editor object, bind to div id*/
    var editor = ace.edit("editor"); 
    var scripting_pane = ace.edit("scripting_pane");
    /*Set default parameters*/
    editor.setFontSize(14);          
    editor.setTheme("ace/theme/tomorrow");
    editor.getSession().setMode("ace/mode/html");
    editor.setReadOnly(true);
    /*Setting defaults for scripting pane*/
    scripting_pane.setFontSize(14);
    scripting_pane.setTheme("ace/theme/monokai");
    scripting_pane.getSession().setMode('ace/mode/javascript');
    scripting_pane.setReadOnly(true);

    var params = window.location.search.replace( "?", "&" );

    params = "http://emptybrains.net/sriduth/cdr/api.php?method=getDocument"+params;

    $.ajax({
            url: params,
            contentType: 'application/json; charset=utf-8',
            type: 'GET',
            async: true,
            dataType: 'JSON',
            timeout: 5000,
            success: function (data, status, url) {
               
               var code = data["code"];
               var script_code = data["scripts"];

               var code_array = code.split(",");
               var scripts_array = script_code.split(",");

               alert(scripts_array);

               editor.getSession().getDocument().insertLines(0,code_array);
               scripting_pane.getSession().getDocument().insertLines(0,scripts_array);

               var html_code_from_editor = editor.getSession().getDocument().getValue();

               

                setTimeout(function (){

                    var script_ = document.createElement("script");
                    script_.setAttribute("type","text/javascript");
                    script_.innerHTML = scripting_pane.getSession().getDocument().getValue();

                    $('#page').contents().find('body').html(html_code_from_editor);
                    $('#page').contents().find('head')[0].appendChild(script_);

                    console.log("launching!");

                },1500);

            },
            error: function (data, status, url) {
              alert("ERROR!");
            }
    });
  
   });//End of $(document).ready();
