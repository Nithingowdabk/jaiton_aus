<!-- ============================================================
     SHOPIFY & WOOCOMMERCE (WORDPRESS) DEVELOPMENT SECTION
     Enterprise e-commerce showcase matching custom store design
     ============================================================ -->
<section id="ecommerce-platforms" class="ecommerce-platforms-section">
  <div class="container container-1400">
    
    <!-- ============================================================
         PART 1: SHOPIFY WEBSITE DEVELOPMENT (MOCKUP LEFT, TEXT RIGHT)
         ============================================================ -->
    <div class="ecommerce-showcase-row shopify-row" data-aos="fade-up">
      
      <!-- Mockup Left -->
      <div class="ecom-mockup-col">
        <div class="ecom-img-frame">
          <img src="assets/images/shopify-dev-showcase.png" alt="Custom Shopify Store Development Mockup" class="ecom-showcase-img">
        </div>
      </div>

      <!-- Content Right -->
      <div class="ecom-content-col">
        <span class="ecom-eyebrow eyebrow-shopify">SHOPIFY WEBSITE DEVELOPMENT</span>
        <h2 class="ecom-main-title">Build a Shopify Store That's Designed To Sell</h2>
        
        <p class="ecom-description">
          Shopify makes it easy to launch and manage an online store, but creating a website that consistently converts visitors into customers takes experience. Our Australian Shopify developers build custom Shopify websites that combine intuitive design, fast performance, and seamless functionality.
        </p>

        <p class="ecom-description mb-4">
          From custom themes and product catalogues to payment gateways, shipping integrations, and ongoing support, we'll help you create a Shopify store that's easy to manage today and ready to grow tomorrow.
        </p>

        <div class="ecom-action-btn">
          <a href="index.php#contact" class="btn ecom-btn btn-shopify">
            Explore Shopify Development <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Divider Line -->
    <div class="ecom-section-divider"></div>

    <!-- ============================================================
         PART 2: WOOCOMMERCE & WORDPRESS DEVELOPMENT (TEXT LEFT, MOCKUP RIGHT)
         ============================================================ -->
    <div class="ecommerce-showcase-row woocommerce-row" data-aos="fade-up">
      
      <!-- Content Left -->
      <div class="ecom-content-col">
        <span class="ecom-eyebrow eyebrow-woocommerce">WOOCOMMERCE & WORDPRESS DEVELOPMENT</span>
        <h2 class="ecom-main-title">Scalable WooCommerce Stores Powered by WordPress</h2>
        
        <p class="ecom-description">
          WooCommerce gives you complete control over your e-commerce store with unlimited customization and zero platform commissions. Our expert WooCommerce developers build high-converting, enterprise-grade WordPress online stores tailored to your business goals.
        </p>

        <p class="ecom-description mb-4">
          Whether you need custom plugin development, headless WooCommerce architectures, ERP/CRM integrations, or speed optimization, we deliver fast, secure, and scalable online stores.
        </p>

        <div class="ecom-action-btn">
          <a href="index.php#contact" class="btn ecom-btn btn-woocommerce">
            Explore WooCommerce Development <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Mockup Right -->
      <div class="ecom-mockup-col">
        <div class="ecom-img-frame">
          <img src="assets/images/woocommerce-dev-showcase.png" alt="Custom WooCommerce WordPress Store Development Mockup" class="ecom-showcase-img">
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ============================================================
     ECOMMERCE PLATFORMS SCOPED STYLES
     ============================================================ -->
<style>
.ecommerce-platforms-section {
  padding: 100px 0;
  background-color: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.ecommerce-showcase-row {
  display: grid;
  grid-template-columns: 48% 48%;
  gap: 4%;
  align-items: center;
}

.ecom-section-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent 0%, #E2E8F0 20%, #E2E8F0 80%, transparent 100%);
  margin: 90px 0;
}

/* Image Column Frame */
.ecom-img-frame {
  position: relative;
  width: 100%;
}

.ecom-showcase-img {
  width: 100%;
  height: auto;
  display: block;
}

/* Content Column Styling */
.ecom-content-col {
  text-align: left;
}

.ecom-eyebrow {
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  display: block;
  margin-bottom: 14px;
}

.eyebrow-shopify {
  color: #38BDF8;
}

.eyebrow-woocommerce {
  color: #6A1BFF;
}

.ecom-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 3.2vw, 44px);
  font-weight: 800;
  line-height: 1.2;
  color: #0B1120;
  margin: 0 0 20px 0;
  letter-spacing: -0.025em;
}

.ecom-description {
  font-size: 16px;
  line-height: 1.7;
  color: #475569;
  margin-bottom: 16px;
  font-weight: 400;
}

/* Action Pill Buttons */
.ecom-action-btn {
  margin-top: 28px;
}

.ecom-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 15px;
  font-weight: 700;
  padding: 14px 32px;
  border-radius: 100px;
  transition: all 300ms ease;
  text-decoration: none !important;
  border: none;
}

.btn-shopify {
  background-color: #38BDF8;
  color: #FFFFFF !important;
  box-shadow: 0 10px 25px rgba(56, 189, 248, 0.25);
}

.btn-shopify:hover {
  background-color: #0284C7;
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(56, 189, 248, 0.35);
}

.btn-woocommerce {
  background-color: #6A1BFF;
  color: #FFFFFF !important;
  box-shadow: 0 10px 25px rgba(106, 27, 255, 0.25);
}

.btn-woocommerce:hover {
  background-color: #5B13E0;
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(106, 27, 255, 0.35);
}

/* Responsive Rules */
@media (max-width: 991px) {
  .ecommerce-showcase-row {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .woocommerce-row {
    display: flex;
    flex-direction: column-reverse;
  }

  .ecom-section-divider {
    margin: 60px 0;
  }
}
</style>
