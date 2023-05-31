import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import { Carousel, initTE } from "tw-elements";
initTE({ Carousel });

const parents = document.querySelectorAll("#card-rooms");
const inputUser = document.querySelector("#inputFindRoom");

inputUser.addEventListener("input", function (e) {
    const val = e.target.value;

    for (let i = 0; i < parents.length; i++) {
        const cardValue = parents[i].getElementsByTagName("h4")[0];

        if (cardValue.innerText.toLocaleLowerCase().indexOf(val) > -1) {
            parents[i].style.display = "";
        } else {
            parents[i].style.display = "none";
        }
    }
});

const tableRows = document.querySelectorAll("#tableBody tr");
const searchInput = document.querySelector("#historySearch");

searchInput.addEventListener("input", function (e) {
    const searchTerm = e.target.value.toLowerCase();

    tableRows.forEach((row) => {
        const tableValue = row.querySelector("h3").innerText.toLowerCase();
        const shouldDisplay = tableValue.includes(searchTerm);

        row.style.display = shouldDisplay ? "" : "none";
    });
});