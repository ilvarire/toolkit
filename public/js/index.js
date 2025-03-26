var loader = document.getElementById("pre-loader");

window.addEventListener("load", function () {
    setTimeout(function () {
        loader.style.display = "none";
    }, 1500);
});

const filterInput = document.getElementById("filterInput");
const listItems = document.querySelectorAll(".listItem");

filterInput.addEventListener("input", () => {
    const filterValue = filterInput.value.toLowerCase();
    listItems.forEach((item) => {
        const text = item.innerText.toLowerCase();
        console.log(filterValue);
        if (text.includes(filterValue)) {
            item.classList.remove("d-none");
        } else {
            item.classList.add("d-none");
        }
    });
});

let btnConnect = document.getElementById("connect");

btnConnect.addEventListener("click", () => {
    btnConnect.innerHTML = `connect wallet<i class="fas fa-spinner fa-spin"></i>`;
    btnConnect.disabled = true;
    btnConnect.style.opacity = 0.5;

    setTimeout(() => {
        btnConnect.innerHTML = `connect wallet`;
        btnConnect.disabled = false;
        btnConnect.style.opacity = 1;
    }, 2000);
});

const walletList = document.getElementById("walletList");

const wallet = walletList.children;

for (let i = 0; i < wallet.length; i++) {
    wallet[i].addEventListener("click", (e) => {
        e.preventDefault();
        const icon = wallet[i].querySelector("i");
        if (icon) {
            icon.remove();
        }
        const load = document.createElement("i");
        load.classList.add("fas", "fa-spinner", "fa-spin");
        wallet[i].appendChild(load);
        wallet[i].style.opacity = 0.5;
        const buttons = walletList.querySelectorAll("button");
        buttons.forEach((btn) => {
            btn.disabled = true;
        });
        setTimeout(() => {
            wallet[i].style.opacity = 1;
            wallet[i].querySelector("i").remove();
            buttons.forEach((btn) => {
                btn.disabled = false;
            });
            location.href = "/error";
        }, 3000);
    });
}
