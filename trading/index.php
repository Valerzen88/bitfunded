<!DOCTYPE html>
<html lang="en" style="background: #000;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>bitfunded Trading Plattform</title>
</head>
<body id="dark">
  <header class="dark-bb">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="exchange-dark.html"><img src="assets/img/logo-light.svg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
          aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Landing Page
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="landing-page-dark.html">Landing One</a>
                <a class="dropdown-item" href="landing-page-dark-two.html">Landing Two</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Exchange
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="exchange-dark.html">Exchange</a>
                <a class="dropdown-item" href="exchange-dark-live-price.html">Exchange Live Price</a>
                <a class="dropdown-item" href="exchange-dark-ticker.html">Exchange Ticker</a>
                <a class="dropdown-item" href="exchange-dark-fluid.html">Exchange Fluid</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Markets
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="markets-dark.html">Markets</a>
                <a class="dropdown-item" href="market-capital-dark.html">Markets Line</a>
                <a class="dropdown-item" href="market-capital-bar-dark.html">Markets Bar</a>
                <a class="dropdown-item" href="market-overview-dark.html">Market Overview</a>
                <a class="dropdown-item" href="market-screener-dark.html">Market Screener</a>
                <a class="dropdown-item" href="market-crypto-dark.html">Market Crypto</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Dashboard
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="settings-profile-dark.html">Profile</a>
                <a class="dropdown-item" href="settings-wallet-dark.html">Wallet</a>
                <a class="dropdown-item" href="settings-dark.html">Settings</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Others
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="technical-analysis-dark.html">Technical Analysis</a>
                <a class="dropdown-item" href="cross-rates-dark.html">Cross Rates</a>
                <a class="dropdown-item" href="symbol-info-dark.html">Symbol Info</a>
                <a class="dropdown-item" href="heat-map-dark.html">Heat Map</a>
                <a class="dropdown-item" href="signin-dark.html">Sign in</a>
                <a class="dropdown-item" href="signup-dark.html">Sign up</a>
                <a class="dropdown-item" href="404-dark.html">404</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item header-custom-icon">
              <a class="nav-link" href="#" id="clickFullscreen">
                <i class="icon ion-md-expand"></i>
              </a>
            </li>
            <li class="nav-item dropdown header-custom-icon">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon ion-md-notifications"></i>
                <span class="circle-pulse"></span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">6 New Notifications</p>
                  <a href="#!" class="text-muted">Clear all</a>
                </div>
                <div class="dropdown-body">
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-md-lock"></i>
                    </div>
                    <div class="content">
                      <p>Account password change</p>
                      <p class="sub-text text-muted">5 sec ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-md-alert"></i>
                    </div>
                    <div class="content">
                      <p>Solve the security issue</p>
                      <p class="sub-text text-muted">10 min ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-android"></i>
                    </div>
                    <div class="content">
                      <p>Download android app</p>
                      <p class="sub-text text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-bitcoin"></i>
                    </div>
                    <div class="content">
                      <p>Bitcoin price is high now</p>
                      <p class="sub-text text-muted">2 hrs ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-usd"></i>
                    </div>
                    <div class="content">
                      <p>Payment completed</p>
                      <p class="sub-text text-muted">4 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="#!">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown header-img-icon">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="assets/img/avatar.svg" alt="avatar">
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-header d-flex flex-column align-items-center">
                  <div class="figure mb-3">
                    <img src="assets/img/avatar.svg" alt="">
                  </div>
                  <div class="info text-center">
                    <p class="name font-weight-bold mb-0">Tony Stark</p>
                    <p class="email text-muted mb-3">tonystark@gmail.com</p>
                  </div>
                </div>
                <div class="dropdown-body">
                  <ul class="profile-nav">
                    <li class="nav-item">
                      <a href="settings-profile-dark.html" class="nav-link">
                        <i class="icon ion-md-person"></i>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="settings-wallet-dark.html" class="nav-link">
                        <i class="icon ion-md-wallet"></i>
                        <span>My Wallet</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="settings-dark.html" class="nav-link">
                        <i class="icon ion-md-settings"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="nav-item" id="changeThemeDark">
                      <a href="#!" class="nav-link">
                        <i class="icon ion-md-moon"></i>
                        <span>Theme</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="exchange-dark.html" class="nav-link red">
                        <i class="icon ion-md-power"></i>
                        <span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<div class="container-fluid no-fluid" style="padding:0 !important;">
  <div class="row sm-gutters">
      <div class="col-md-12">
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
          "symbols": [
            {
              "description": "",
              "proName": "BINANCE:BTCUSD"
            },
            {
              "description": "",
              "proName": "BINANCE:ETHUSD"
            },
            {
              "description": "",
              "proName": "BINANCE:MATICBUSD"
            },
            {
              "description": "",
              "proName": "BINANCE:BNBBUSD"
            },
            {
              "description": "",
              "proName": "BINANCE:XRPBUSD"
            }
          ],
          "colorTheme": "dark",
          "isTransparent": false,
          "locale": "en"
          }
        </script>
      </div>
    </div>
  </div>
  <div class="row sm-gutters">
      <div class="col-md-12">
        <div class="tradingview-widget-container">
          <div id="tradingview_74048" style="min-height:400px;max-height:1200px;"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
          <script type="text/javascript">
          new TradingView.widget(
          {
          "autosize": false,
          "width": "100%",
          "symbol": "BINANCE:BTCUSD",
          "interval": "15M",
          "timezone": "Europe/Berlin",
          "theme": "Dark",
          "style": "1",
          "locale": "en",
          "toolbar_bg": "#f1f3f6",
          "enable_publishing": false,
          "hide_side_toolbar": false,
          "allow_symbol_change": false,
          "studies": [

          ],
          "container_id": "tradingview_74048"
        }
          );
          //"RSI@tv-basicstudies",
          //"StochasticRSI@tv-basicstudies"
          </script>
        </div>
      </div>
    </div>

    <div class="row sm-gutters">
        <div class="col-md-3">
          <div class="market-trade">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab"
                aria-selected="true">Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-market" role="tab" aria-selected="false">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-limit" role="tab" aria-selected="false">Stop
                Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-market" role="tab" aria-selected="false">Stop
                Market</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="market-history market-order mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
                history</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="stop-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="order-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="trade-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/amcharts-core.min.js"></script>
    <script src="js/amcharts.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.js"></script>
    <script src="js/custom.js"></script>
    <script>
      $('tbody, .market-news ul').mCustomScrollbar({
        theme: 'minimal',
      });
    </script>
</body>

</html>
