
    (function() {
      var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
      var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/polyfills.aaTJ3aJS.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/app.Bc76mhqt.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/page-OnePage.BVzuA4Tg.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/DeliveryMethodSelectorSection.Cnqgxx0I.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/useEditorShopPayNavigation.CVmpqzj3.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/VaultedPayment.CwNVyO3Y.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/LocalizationExtensionField.CBsmNQzE.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/RememberMeDescriptionText.Z9yNji38.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/PayButtonSection.CzhWN64z.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/component-ShopPayVerificationSwitch.BAheKoFJ.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/useSubscribeMessenger.u6zCfg9o.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/index.B7hH4JpV.js"];
      var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/assets/app.CqblHuRC.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/assets/OnePage.PMX4OSBO.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/assets/DeliveryMethodSelectorSection.DmqjTkNB.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/assets/useEditorShopPayNavigation.DCOTvxC3.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1.en/assets/ShopPayVerificationSwitch.DW7NMDXG.css"];
      var fontPreconnectUrls = ["https://fonts.shopifycdn.com"];
      var fontPrefetchUrls = ["https://fonts.shopifycdn.com/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b79146.woff2?h1=eWVlenkuY29t&hmac=e29fb3bc75f2614203b3dd85c25627bddf2c9c5bc862d6be8fcf8ac48bbb14b3","https://fonts.shopifycdn.com/helvetica/helvetica_n7.39bee04bd277a9c4e94e2fd42d53f4e3c0afb8a5.woff2?h1=eWVlenkuY29t&hmac=e5ed520009d687698c24af4b9cd1627c95f7734e747b65d6a161b72e2d4d70fa"];
      var imgPrefetchUrls = ["https://cdn.shopify.com/s/files/1/0675/1266/4292/files/yzy_checkout_left_x320.png?v=1738459849"];

      function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      }

      function preconnectAssets() {
        var resources = [baseURL].concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) preconnect(res, next);
        })();
      }

      function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
          link.rel = 'prefetch';
          link.fetchPriority = 'low';
          link.as = as;
          if (as === 'font') link.type = 'font/woff2';
          link.href = url;
          link.crossOrigin = '';
          link.onload = link.onerror = callback;
          document.head.appendChild(link);
        } else {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.onloadend = callback;
          xhr.send();
        }
      }

      function prefetchAssets() {
        var resources = [].concat(
          scripts.map(function(url) { return [url, 'script']; }),
          styles.map(function(url) { return [url, 'style']; }),
          fontPrefetchUrls.map(function(url) { return [url, 'font']; }),
          imgPrefetchUrls.map(function(url) { return [url, 'image']; })
        );
        var index = 0;
        function run() {
          var res = resources[index++];
          if (res) prefetch(res[0], res[1], next);
        }
        var next = (self.requestIdleCallback || setTimeout).bind(self, run);
        next();
      }

      function onLoaded() {
        try {
          if (parseFloat(navigator.connection.effectiveType) > 2 && !navigator.connection.saveData) {
            preconnectAssets();
            prefetchAssets();
          }
        } catch (e) {}
      }

      if (document.readyState === 'complete') {
        onLoaded();
      } else {
        addEventListener('load', onLoaded);
      }
    })();
  