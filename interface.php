<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
  padding: 0;
  margin: 0;
  overflow: hiddle;
  font-size: 100.01%;
  max-width: 270px;
  max-height: 370px;
  tex-align: center;
  background-color: transparent;
  color: #fff;
}
form {
margin: 0;
padding: 6px auto;
overflow: hiddle;
width: 100%;
height: 100%;
text-align: center;
font-size: 0.75em;
border-radius: 1em;
background-color: #004d85;
box-shadow: 1px 3px 7px black;
}
select, input[TYPE="TEXT"], input[TYPE="SUBMIT"], input[TYPE="RESET"] {
width: 99%;
text-align: center;
background-color: #fff;
color: #444;
padding-left: 8px;
padding-right: 8px;
padding-top: 4px;
padding-bottom: 4px;
margin-bottom: auto;
}
</style>
</head>
<body>
<?php
$service = $coin = $products = $currencies = $result = "";

if(empty($service) && $service == $_POST['service']) {
  $service = "";
}
if(empty($coin) && $coin == $_POST['coin']) {
  $coin = "";
}
if(empty($products) && $products == $_POST['products']) {
  $products = "";
}
if(empty($currencies) && $currencies == $_POST['currencies']) {
  $currencies = "";
}
if(empty($result) && $result == $_POST['result']) {
  $result = NAN;
}
if(isset($service) && $service == "buy") {
  if(isset($coin) && $coin <= 500) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    }
  } else if(isset($coin) && $coin <= 1000) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.00
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.00;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.00;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.00;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.00;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 39.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 54.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 49.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 30.00;
      }
    }
  } else if(isset($coin) && $coin <= 1500) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.50;
      }
    }
  } else if(isset($coin) && $coin <= 2000) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 38.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 53.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 48.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 29.00;
      }
    }
  } else if(isset($coin) && $coin >= 2001) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 37.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 52.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 28.50;
      }
    }
  }
} else if(isset($service) && $service == "sell") {
  if(isset($coin) && $coin <= 500) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 30.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 45.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 40.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 21.50;
      }
    }
  } else if(isset($coin) && $coin <= 1000) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.00;
      }
    }
  } else if(isset($coin) && $coin <= 1500) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 31.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 46.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 41.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 22.50;
      }
    }
  } else if(isset($coin) && $coin <= 2000) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.00;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.00;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.00;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.00;
      }
    }
  } else if(isset($coin) && $coin >= 2001) {
    if(isset($service) && $service == "paypal") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "webmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "perfectmoney") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "neteller") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "okpay") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "payco") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    } else if(isset($service) && $service == "skrill") {
      if(isset($currencies) && $currencies == "usd") {
        $result = $coin * 32.50;
      } else if(isset($currencies) && $currencies == "gbp") {
        $result = $coin * 47.50;
      } else if(isset($currencies) && $currencies == "eur") {
        $result = $coin * 42.50;
      } else if(isset($currencies) && $currencies == "sgd") {
        $result = $coin * 23.50;
      }
    }
  }
}
?>

<form name="mycol1" id="mycol1" method="post" action="interface.php">
<h5>เครื่องคำนวณอัตราแลกเปลี่ยน</h5>
<p>
<select name="service" id="service" size="1">
<option value="">โปรดเลือกบริการ</option>
<option value="buy"<?php if(isset($service) && $service == "buy") {?> selected="selected"; <?php } ?>>ซื้อเหรียญ</option>
<option value="sell"<?php if(isset($service) && $service == "sell") {?> selected="selected"; <?php } ?>>ขายเหรียญ</option>
</select>
</p>

<p>
จำนวนเงิน<br>
<input name="coin" id="coin" type="text" size="10" value="<?php echo $coin ?>">
</p>

<p>
<select name="products" id="products" size="1">
<option value="">เลือกประเภทบันชี</option>
<option value="paypal"<?php if(isset($products) && $products == "paypal") {?> selected="selected"; <?php } ?>>PAYPAL</option>
<option value="webmoney"<?php if(isset($products) && $products == "webmoney") {?> selected="selected"; <?php } ?>>WEB MONEY</option>
<option value="perfectmoney"<?php if(isset($products) && $products == "perfectmoney") {?> selected="selected"; <?php } ?>>PERFECT MONEY</option>
<option value="neteller"<?php if(isset($products) && $products == "neteller") {?> selected="selected"; <?php } ?>>NETELLER</option>
<option value="okpay"<?php if(isset($products) && $products == "okpay") {?> selected="selected"; <?php } ?>>OK PAY</option>
<option value="payco"<?php if(isset($products) && $products == "payco") {?> selected="selected"; <?php } ?>>PAYCO</option>
<option value="skrill"<?php if(isset($products) && $products == "skrill") {?> selected="selected"; <?php } ?>>SKRILL</option>
</select>
</p>

<p>
<select name="currencies" id="currencies" size="1">
<option value="">เลือกสกุลเงิน</option>
<option value="usd"<?php if(isset($currencies) && $currencies == "usd") {?> selected="selected"; <?php } ?>>USD : ดอลลาร์สหรัฐฯ / US Dollar</option>
<option value="gbp"<?php if(isset($currencies) && $currencies == "gbp") {?> selected="selected"; <?php } ?>>GBP : ปอนด์อังกฤษ / British Pound</option>
<option value="eur"<?php if(isset($currencies) && $currencies == "eur") {?> selected="selected"; <?php } ?>>EUR : ยูโร / Euro</option>
<option value="sgd"<?php if(isset($currencies) && $currencies == "sgd") {?> selected="selected"; <?php } ?>>SGD : สิงคโปร์ฯดอลลาร์ / Singapore Dollar</option>
</select>
</p>

<p>
<input type="submit" value="คำนวณ" name="submit">
</p>

<p>
แลกได้<br>
<strong><?php echo "$result" ?></strong>
</p>

<p>
<input type="reset" name="reset" value="คำนวณอีกครั้ง">
</p>
</form>
</body>
</html>
