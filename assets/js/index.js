// NEED TO RETHINK THIS MODAL PART

const openmodals = document.querySelectorAll(".modal-open");

openmodals.forEach(om => {
    om.addEventListener("click", function () {
        const body = document.querySelector("body");
        const modal = document.querySelector(`#${this.dataset.modal}`);

        body.classList.toggle("modal-active");
        modal.classList.toggle("opacity-0");
        modal.classList.toggle("pointer-events-none");
    });
})

const overlays = document.querySelectorAll(".modal-overlay");

overlays.forEach(element => {
    element.addEventListener("click", toggleModal);
});

// const closemodal = document.querySelector('.modal-close')
// closemodal.addEventListener('click', toggleModal)

// document.onkeydown = function (evt) {
//     evt = evt || window.event;
//     let isEscape = false;
//     if ("key" in evt) {
//         isEscape = evt.key === "Escape" || evt.key === "Esc";
//     } else {
//         isEscape = evt.keyCode === 27;
//     }
//     if (isEscape && document.body.classList.contains("modal-active")) {
//         toggleModal();
//     }
// };

function toggleModal() {
    const body = document.querySelector("body");
    const modal = document.querySelector(`#${this.parentNode.id}`);

    body.classList.toggle("modal-active");
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
}
