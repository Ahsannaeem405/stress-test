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
