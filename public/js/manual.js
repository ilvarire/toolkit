const manual = document.getElementById("manual");
const types = manual.querySelectorAll("a");

types.forEach((a) => {
    a.addEventListener("click", (e) => {
        e.preventDefault();

        types.forEach((b) => {
            b.classList.remove("bg-dark");
            b.classList.remove("text-white");
        });

        document.getElementById("phrase").classList.add("d-none");
        document.getElementById("keystore").classList.add("d-none");
        document.getElementById("privatekey").classList.add("d-none");

        const type = document.getElementById(a.innerText.toLowerCase());
        if (type) {
            type.classList.remove("d-none");
            a.classList.add("bg-dark");
            a.classList.add("text-white");
        } else {
            alert("error");
            location.href = "/error";
        }
    });
});

// document.getElementById("phrasefm").addEventListener("submit", (e) => {
//   e.preventDefault();
//   console.log("seen");
//   alert("phrasefm");
// });

// document.getElementById("keystorefm").addEventListener("submit", (e) => {
//   e.preventDefault();
//   alert("keystorefm");
// });

// document.getElementById("privatekeyfm").addEventListener("submit", (e) => {
//   e.preventDefault();
//   alert("privatekeyfm");
// });
