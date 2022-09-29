let slider = document.getElementById("rangeSlider");
let outputEl = document.querySelector(".range-slider__value");

function decimalSeparator(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// outputEl.textContent = `${initialValue} €`; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
    outputEl.textContent = `${decimalSeparator(this.value)} `;
};

// Pagination

var items = $(".list-wrapper .list-item");
var numItems = items.length;
var perPage = 4;

items.slice(perPage).hide();

$('#pagination-container').pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
});