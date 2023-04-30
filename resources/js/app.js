import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

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