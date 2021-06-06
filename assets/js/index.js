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

/////////////////  DRAG N' DROP  /////////////////
document.addEventListener(
    "dragstart",
    function (event) {
        event.dataTransfer.setData("draggable", event.target.id);
        event.target.style.opacity = 0.5;
    },
    false
);

document.addEventListener(
    "dragend",
    function (event) {
        event.dataTransfer.clearData("draggable");
        event.target.style.opacity = "";
    },
    false
);

document.addEventListener(
    "dragover",
    function (event) {
        event.preventDefault();
    },
    false
);

document.addEventListener(
    "dragenter",
    function (event) {
        if (event.target.classList.contains("dropzone")) {
            event.target.classList.replace("border-transparent", "border-pink-600");
        }
    },
    false
);

document.addEventListener(
    "dragleave",
    function (event) {
        if (event.target.classList.contains("dropzone")) {
            event.target.classList.replace("border-pink-600", "border-transparent");
        }
    },
    false
);

document.addEventListener(
    "drop",
    function (event) {
        event.preventDefault();

        if (event.target.classList.contains("dropzone")) {
            const draggable = event.dataTransfer.getData("draggable");
            const draggedElement = document.getElementById(draggable);

            event.target.appendChild(draggedElement);
            event.target.classList.replace("border-pink-600", "border-transparent");

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:4321/core/updateTicket.php");

            // xhr.setRequestHeader("Access-Control-Allow-Headers", "*");
            xhr.setRequestHeader("Content-Type", "application/json");

            const obj = {
                id: draggable.slice(7),
                ticket_status: draggedElement.parentNode.dataset.ticketStatus
            };

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // console.log(xhr.responseText);

                    // Refresh page to update 
                    window.location.reload()
                }
            }

            xhr.send(JSON.stringify(obj));
        }
    },
    false
);