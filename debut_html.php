<?php
function debut_html($title) {
  return
    "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML Basic 1.1//EN'
        'http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd'>\n" .
    "<html xmlns='http://www.w3.org/1999/xhtml' lang='fr' style='background: #f5fbff;'>\n" .
    "<head>\n" .
    "<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />\n" .
    "<title>" . 
    $title .
    "</title>\n" .
    "</head>\n";
}
/// test
/// echo debut_html('test'), '<body><div>test</div></body></html>';
?>