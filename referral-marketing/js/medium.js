$(function () {
    var mediumPromise = new Promise(function (resolve) {
    var $content = $('#jsonContent');
    var data = {
        rss: 'https://medium.com/feed/@betasouk'
    };
    $.get('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2F%40betasouk', data, function (response) {
        if (response.status == 'ok') {
            $("#logo").append(`<img src="${response.feed["image"]}"`)
            var display = '';
            $.each(response.items, function (k, item) {
                display += `<div class="col-lg-4"><div class="aplpg-blog-column">`;
                var src = item["thumbnail"]; // use thumbnail url
                display += `<div class="aplpg-img-wrapper"><img src="${src}" alt="" style="height:232px; width:auto;"></div>`;
                display += `<div class="aplg-blog-column-txt">`;
                display += `<div class="aplpg-headline"><a href="${item.link}"><h6>${item.title}</h6></a></div>`;
                var yourString = item.description.replace(/<img[^>]*>/g,""); //replace with your string.
                yourString = yourString.replace('h4', 'p');
                yourString = yourString.replace('h3', 'p');
                var maxLength = 120; // maximum number of characters to extract
                //trim the string to the maximum length
                var trimmedString = yourString.substr(0, maxLength);
                //re-trim if we are in the middle of a word
                trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
                display += `<div class="aplpg-pera-txt"><p>${trimmedString}</p></div>`;
                display += '</div>';
                
                display += `<div class="aplpg-readmore-btn"><a href="${item.link}"><i class="fas fa-plus"></i></a></div>`;
                display += '</div></div>';
                return k < 10;
            });

            resolve($content.html(display));
        }
    });
    });

});