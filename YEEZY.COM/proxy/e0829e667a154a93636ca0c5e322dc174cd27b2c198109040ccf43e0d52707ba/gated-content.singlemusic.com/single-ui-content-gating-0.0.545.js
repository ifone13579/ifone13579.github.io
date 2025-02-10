if (/complete|interactive|loaded/.test(document.readyState)) {
  bootstrapApp();
} else {
  window.addEventListener('DOMContentLoaded', bootstrapApp);
}

function bootstrapApp() {
  const customAngularElements = [
    { tag: "single-content-gating" },
    { tag: "single-product-form-fallback" },
    { tag: "single-product-form-wallet" },
    { tag: "single-product-form-wrapper" },
    { tag: "single-spinner" },
    { tag: "single-fan-subscription-management" },
    { tag: "single-cart" },
    { tag: "single-order-status" },
    { tag: "single-order-status-digital" },
    { tag: "single-order-status-membership" },
    { tag: "single-order-status-nft" },
    { tag: "single-order-status-video" },
    { tag: "single-order-status-loading" },
    { tag: "single-account-activation" },
    { tag: "single-video-bar" },
    { tag: "single-video" },
    { tag: "single-video-chat" },
    { tag: "single-video-landing" },
    { tag: "single-promoted-products" },
    { tag: "single-product" },
    { tag: "single-page" },
    { tag: "single-login" },
    { tag: "single-grant-access" },
    { tag: "single-need-access" },
    { tag: "single-membership-management" },
    { tag: "single-collection-all" },
    { tag: "single-toast" },
    { tag: "single-upsell" },
    { tag: "single-collectibles" },
    { tag: "single-perks" },
    { tag: "single-membership-account-info" },
    { tag: "single-powered-by"}
  ];

  let exit;
  customAngularElements.forEach(el => {
    if(exit) {
      return;
    }
    const tags = document.getElementsByTagName(el.tag);
    if (tags && tags.length >= 1) {
      createScript();
      exit = true;
    }
  });

  if (!exit) {
    if (window.location.pathname === '/cart' || window.location.pathname.includes('/orders/') ||
      (window.location.pathname.includes('/checkouts/') && window.location.pathname.includes('/thank_you')) ||
      window.location.pathname.includes("/account/activate") || window.location.pathname.includes('/products/')) {
      createScript();
    }
  }
}

function createScript() {
  const script = document.createElement('script');
  script.setAttribute('src', 'https://gated-content.singlemusic.com/single-ui-content-gating-app-0.0.545.js');
  document.head.appendChild(script);
}
