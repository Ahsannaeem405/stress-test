let slider = document.getElementById("rangeSlider");
let outputEl = document.querySelector(".range-slider__value");
let slider2 = document.getElementById("rangeSlider2");
let outputEl2 = document.querySelector(".range-slider__value2");
let slider3 = document.getElementById("rangeSlider3");
let outputEl3 = document.querySelector(".range-slider__value3");
let slider4 = document.getElementById("rangeSlider4");
let outputEl4 = document.querySelector(".range-slider__value4");
let slider5 = document.getElementById("rangeSlider5");
let outputEl5 = document.querySelector(".range-slider__value5");
let slider6 = document.getElementById("rangeSlider6");
let outputEl6 = document.querySelector(".range-slider__value6");
let slider7 = document.getElementById("rangeSlider7");
let outputEl7 = document.querySelector(".range-slider__value7");
let slider8 = document.getElementById("rangeSlider8");
let outputEl8 = document.querySelector(".range-slider__value8");

function decimalSeparator(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// outputEl.textContent = `${initialValue} €`; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
    outputEl.textContent = `${decimalSeparator(this.value)} `;
};
slider2.oninput = function () {
    outputEl2.textContent = `${decimalSeparator(this.value)} `;
};
slider3.oninput = function () {
    outputEl3.textContent = `${decimalSeparator(this.value)} `;
};
slider4.oninput = function () {
    outputEl4.textContent = `${decimalSeparator(this.value)} `;
};
slider5.oninput = function () {
    outputEl5.textContent = `${decimalSeparator(this.value)} `;
};
slider6.oninput = function () {
    outputEl6.textContent = `${decimalSeparator(this.value)} `;
};
slider7.oninput = function () {
    outputEl7.textContent = `${decimalSeparator(this.value)} `;
};
slider8.oninput = function () {
    outputEl8.textContent = `${decimalSeparator(this.value)} `;
};

