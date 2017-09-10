console.log("newArticle.js");

console.log("Lang : " + $("html")[0].lang);

$('#date').datepicker({
    todayBtn: "linked",
    language: $("html")[0].lang,
    todayHighlight: true
});

paragraph = $(".paragraph-content").length;

$("#deleteParagraph").on("click", function() {
    if ( paragraph > 1 ) {
        $("#paragraph"+paragraph).remove();
        paragraph--;
    } else {
        console.log("Only 1 paragraph left.");
    }
});

$("#addParagraph").on("click", function() {
    if (typeof paragraph !== 'undefined') {
        paragraph++;
    } else {
        paragraph = 2;
    }

    htmlContent = $("#contentToDuplicate")[0].innerHTML;

    newHtmlContent = "<div id='paragraph" + paragraph + "'>";
    newHtmlContent += htmlContent
        .replace("Paragraphe 1", "Paragraphe " + paragraph)
        .replace("text1", "text" + paragraph)
        .replace("1[text]", paragraph + "[text]")
        .replace("img1", "img" + paragraph)
        .replace("1[img]", paragraph + "[img]")
        .replace("\"1[format]", "\"" + paragraph + "[format]")
        .replace("\"1[format]", "\"" + paragraph + "[format]")
        .replace("\"1[format]", "\"" + paragraph + "[format]")
        .replace("\"1[format]", "\"" + paragraph + "[format]")
        .replace("\"1[format]", "\"" + paragraph + "[format]")
        .replace("\"1[format]", "\"" + paragraph + "[format]");
    newHtmlContent+= "</div>";

    $( newHtmlContent ).insertBefore( "#appendBefore" );

});
