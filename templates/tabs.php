 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://bootsnipp.com/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
	<style>

/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>
<script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-plane"></h4><br/>Flight
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/>Train
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Hotel
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Restaurant
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script type="text/javascript">
$(function(){
    $('iframe.snippet-preview').each(function()
        {
                previewportWidth = $(this).parent().parent().innerWidth()-30;
                $(this).zoomer({ width: previewportWidth, height: $(this).parent().innerWidth()*.75, zoom: .5, message : '' ,messageURL : $(this).attr('data-url') })
                $(this).zoomer('refresh');
        });
});
</script>
<script src="http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js"></script>
<script type="text/javascript">
(function($) { 
    window.addEventListener('message', receiveMessage, false);
    function receiveMessage(evt)
    {
        if (evt.origin !== 'http://bootsnipp.com') return;
        
        if ((evt.data != undefined) && (evt.data) && (typeof evt.data === "number"))
            if(evt.data >= 500) {
//                $('#playground-container').css('height', evt.data+30+'px');    
            }
    }

    var version = '3.3.0';
    var htmleditor = ace.edit("editor-html");
    var jseditor = ace.edit("editor-js");
    var csseditor = ace.edit("editor-css");

    $('#theme_chooser').change(function(){
        whichCSS = $(this).val();
        document.getElementById('snippet-preview').contentWindow.changeCSS(whichCSS);
    });

    function setEditorOptions(editor, type){
        editor.setTheme("ace/theme/clouds");
        editor.setHighlightActiveLine(false);
//        editor.setReadOnly(true);
        editor.getSession().setMode("ace/mode/"+type);
    };

    setEditorOptions(htmleditor,'html');
    setEditorOptions(jseditor,'javascript');
    setEditorOptions(csseditor,'css');

    function markActive(el)
    {
       $(el).siblings().removeClass('active');
       $(el).addClass('active'); 
    }

    $('#show-html').click(function(e){
        e.preventDefault();
        $('#editor-html').show().siblings().hide();
        markActive(this);
        $('#preview-container').hide();
        htmleditor.resize();
    });

    $('#show-js').click(function(e){
        e.preventDefault();
        $('#editor-js').show().siblings().hide();
        $('#preview-container').hide();
        markActive(this);
        jseditor.resize();
    });

    $('#show-css').click(function(e){
        e.preventDefault();
        $('#editor-css').show().siblings().hide();
        $('#preview-container').hide();
        markActive(this);
        csseditor.resize();
    });

    $('#show-preview').click(function(e){
        e.preventDefault();
 
        markActive(this);
 
        $('.playground-editor').hide();
 
        var html = buildSource(htmleditor, jseditor, csseditor);
        var iframe = document.createElement('iframe');
        
        iframe.src = 'about:blank';
        iframe.frameBorder="0";
        iframe.height = 496;
        iframe.className = 'preview-iframe';
        
        $('.preview-iframe').remove();
        $('div#preview-container').append(iframe);
        
        iframe.contentWindow.document.open('text/html', 'replace');
        iframe.contentWindow.document.write(html);
        iframe.contentWindow.document.close();
 
        $('#preview-container').show();
    });

    var cssurls = {};
    var jsurls = {};

        cssurls['4.0.0'] = '//cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css';
    jsurls['4.0.0'] = '//cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js';
        cssurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css';
    jsurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js';
        cssurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css';
    jsurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js';
        cssurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css';
    jsurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js';
        cssurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css';
    jsurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js';
        cssurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css';
    jsurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js';
        cssurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css';
    jsurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js';
        cssurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css';
    jsurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js';
        

    function buildSource(htmleditor, jseditor, csseditor)
    {   
        var code = {};
        code.html = htmleditor.getValue();
        code.css = csseditor.getValue();
        code.js = jseditor.getValue();
        code.bootstrapcss = cssurls[version];
        code.bootstrapjs = jsurls[version];

        var template = "<!doctype html>\n\
                        <html>\n\
                            <head>\n\
                                <meta charset='utf-8'>\n\
                                <meta name='viewport' content='width=device-width, initial-scale=1'>\n\
                                <title>Snippet - Bootsnipp.com</title>\n\
                                <link href='|bootstrapcss|' rel='stylesheet'>\n\
                                <style>|css|\x3C/style>\n\
                                \x3Cscript type='text/javascript' src='//code.jquery.com/jquery-1.10.2.min.js'>\x3C/script>\n\
                                \x3Cscript type='text/javascript' src='|bootstrapjs|'>\x3C/script>\n\
                                \x3Cscript type='text/javascript'>|js|\x3C/script>\n\
                            </head>\n\
                            <body>\n\
                            |html|\n\
                            </body>\n\
                        </html>";

        content = template.replace(/\|(\w+)\|/g, function(match, str)
        {
            if(str in code) return code[str];
            return '';
        });   
                        
        return content;
    }

    
})(jQuery);
</script>