require_once 'funsHtml.php';

$html = "<h1>Welcome</h1><p>This is a <a href='#'>test link</a></p>";

$convertedHtml = convertHtmlTags($html);

echo $convertedHtml;

