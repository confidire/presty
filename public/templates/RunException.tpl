<?php
use \HighlightUtilities\Functions;


echo /** @lang text */"<head>
<title>错误：" . $message . "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
<style>
    body{
        color: #333;
        padding: 0 20px 20px;
        word-break: break-word;
        font: 14px Verdana, 'Helvetica Neue', helvetica, Arial, 'Microsoft YaHei', sans-serif;
        margin: 20px 0 0;
        line-height: 30px;
    }
    h1{
        margin: 10px 0 0;
        font-size: 28px;
        font-weight: 500;
        line-height: 32px;
    }
    pre{
        background-color: whitesmoke;
    }
    .detailed{
        border-top: 1px solid #eee;
    }
    .errorLine{
        background-color: lightpink;
    }
    .nums{
        float: left;
        line-height: 25px;
        text-align: end;
        background-color: whitesmoke;
        padding-right: .3rem;
        padding-left: 1rem;
        border-right: solid .1px darkgrey;
        margin-top: .5rem;
        margin-bottom: .5rem;
    }
    ";
echo file_get_contents(VENDOR . "scrivo" . DS . "highlight.php" . DS . "src" . DS . "Highlight" . DS . "styles" . DS . "atom-one-light.css");
echo "</style>
</head>";
echo ("<body>");
if (\presty\Env::get("system.debug_mode", false)) {
    echo ("<h1>" . $message . "</h1>" . "<p style='line-height:20px'>[错误类型：" . $type . "]<br>[错误代码：" . $code . "]<br>[错误时间：" . date('Y-m-d H:i:s') . "]</p>");
    echo ("<div class=\"detailed\">");
    echo ("<h3>错误抛出位置：<br></h3><p><u>" . $file . "</u> 第 <b>" . $line . "</b> 行</p>");
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $hl = new \Highlight\Highlighter();
        $replace = "\n";
        $content = str_replace(["\r\n", "\n", "\r"], $replace, $content); //解决不同文件格式的换行符不统一的问题
        $content = str_replace("{{<span class=\"hljs-title\">OriginalWrapSymbol</span>}}", "\n", $hl->highlight('php', $content)->value); //代码高亮
        // echo "<script>console.log('".str_replace("'","\"",$content)."')</script>";
        $content = explode("\n", $content);
        array_unshift($content, ""); //为了避免数组从0开始计算长度，而文件行数是从1开始计算行数的差异
        $content = array_slice(array_values($content), $line - 10, 20, true);
        echo ("<div class=\"nums\">");
        foreach ($content as $key => $value) {
            echo ($key . ".<br>");
        }
        echo ("</div>");
        echo ("<pre style=\"font-family: ui-sans-serif;line-height: 25px;padding-left: 53px;padding-top: .5rem;padding-bottom: .5rem;\">");
        foreach ($content as $key => $value) {
            if ($key == $line) {
                print_r("<div class=\"errorLine\">                 " . $value . "</div>");
            } else {
                print_r("          " . $value . "<br>");
            }
        }
        echo ("</pre></div>");
    } else {
        echo ("<div class=\"nums\">");
        echo ("0" . ".<br>");
        echo ("</div>");
        echo ("<pre style=\"font-family: ui-sans-serif;line-height: 25px;padding-left: 53px;padding-top: .5rem;padding-bottom: .5rem;\">");
        $content = printf("%s", \presty\Container::getInstance ()->makeAndSave("lang")->lang()['unable_get_file_content']);
        echo ("</pre></div>");
    }
    echo ("<div class=\"detailed\">");
    echo ("<h3>堆栈追踪：<br></h3>");
    echo ("<div style='line-height:20px'>");
    echo "<pre style='line-height: 30px;font-size: large;'>";
    if (empty($errTrace))
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
    else {
        $outputTrace = "";
        foreach ($errTrace as $key => $link) {
            $outputTrace .= "#$key ";
            if (isset($link["class"]))
                $outputTrace .= $link["class"] . $link["type"];
            if (isset($link["function"]))
                $outputTrace .= $link["function"];
            if (isset($link["file"]))
                $outputTrace .= " called at [" . $link["file"] . ":" . $link["line"] . "]";
            $outputTrace .= "<br>";
        }
        echo $outputTrace;
    }
    echo "</pre>";
    echo ("</div>");
    echo ("</div>");
} else {
    echo ("<h1>" . $message . "</h1>" . "<p style='line-height:20px'>[错误时间：" . date('Y-m-d H:i:s') . "]</p>");
    echo ("<div class=\"detailed\">");
    echo ("由<a href='https://presty.confidire.com' style='color:#3b3b3b'>Presty</a>框架提供支持");
}
echo ("</body>");
die();