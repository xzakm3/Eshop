function productPlusOne(element) {
   var count = parseInt($(element).prev().text(), 10);
   count = parseInt(count, 10) + 1;

   var spanElementOfCount = $(element).prev();
    spanElementOfCount[0].childNodes[1].textContent = count;
    spanElementOfCount[0].childNodes[0].value = count;

   var priceForOnePiece = $(element).parent().prev().text();
    priceForOnePiece = priceForOnePiece.substr(0, priceForOnePiece.indexOf('€'));
    priceForOnePiece = parseInt(priceForOnePiece, 10);

    $(element).parent().next().text(count * priceForOnePiece+'€');

    var prices_arr = $('.price-without-DPH');
    prices_arr[1].textContent = parseInt(prices_arr[1].textContent,10) + (priceForOnePiece * 0.8) + '€';

    prices_arr = $('.price-with-DPH');
    prices_arr[1].textContent = parseInt(prices_arr[1].textContent,10) + priceForOnePiece + '€';
}

function productMinusOne(element) {
    var count = parseInt($(element).next().text(), 10);
    if(count > 0) {
        count = count - 1;
    }

    var spanElementOfCount = $(element).next();
    spanElementOfCount[0].childNodes[1].textContent = count;
    spanElementOfCount[0].childNodes[0].value = count;
    // $(element).next().text(count);

    var priceForOnePiece = $(element).parent().prev().text();
    priceForOnePiece = priceForOnePiece.substr(0, priceForOnePiece.indexOf('€'));
    priceForOnePiece = parseInt(priceForOnePiece, 10);

    $(element).parent().next().text(count * priceForOnePiece+'€');

    var prices_arr = $('.price-without-DPH');
    prices_arr[1].textContent = parseInt(prices_arr[1].textContent,10) - (priceForOnePiece * 0.8) + '€';

    prices_arr = $('.price-with-DPH');
    prices_arr[1].textContent = parseInt(prices_arr[1].textContent,10) - priceForOnePiece + '€';
}

function showSubmenu(element) {
    if(element.children[1].style.display === 'none') {
        element.children[1].style.display = 'block';
    }
    else {
        element.children[1].style.display = 'none';
    }
}