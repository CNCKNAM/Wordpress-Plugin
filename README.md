# WordPress Plugins

## Table of Contents
- [Plugin 1 : Woo Custom Shipping Zones](#plugin-1)
- [Plugin 2 : Dynamic Tag - Post Category URL](#plugin-2)
- [Plugin 3 : Dynamic Tag - Product Category Main Description](#plugin-3)

---
## Plugin 1
Name : Woo Custom Shipping Zones

A simple WordPress plugin that customizes shipping zones in WooCommerce for specific regions in Hong Kong.

### Description
The **Custom Woo Shipping Zones** plugin allows you to define specific shipping zones for different areas in Hong Kong. This is particularly useful for businesses operating in Hong Kong who want to offer tailored shipping options based on the customer's location.

### Features
- Adds custom shipping zones for various districts in Hong Kong.
- Easy to customize and extend if needed.
- Compatible with WooCommerce.

### Installation
1. Download the plugin files.
2. Upload the plugin folder to your WordPress installation's `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. The custom shipping zones will be available in the WooCommerce settings.

### Usage
After activating the plugin, you can configure your shipping zones by navigating to:
1. WooCommerce > Settings.
2. Click on the 'Shipping' tab.
3. You will see the custom zones listed under the 'Shipping Zones' section.

### Image Reference
Default_Zones
![Default_Zones](https://github.com/CNCKNAM/Wordpress-Plugin/blob/main/ref_pic/woo-custom-shipping-zones/default_zones.PNG)

Plugin_Zones
![Plugin_Zones](https://github.com/CNCKNAM/Wordpress-Plugin/blob/main/ref_pic/woo-custom-shipping-zones/plugin_zones.PNG)

---

## Plugin-2
Name : Dynamic Tag - Post Category URL

A simple Elementor dynamic tag plugin that allows you to display the URL of the first category of a WordPress post.

### Description
The **Dynamic Tag - Post Category URL** plugin integrates seamlessly with Elementor, allowing users to retrieve and display the URL of the first category assigned to a post. This dynamic tag is particularly useful for linking to related categories in a visually appealing way.

### Features
- **Dynamic Tag**: Adds a new dynamic tag to Elementor: **"Related Post Category URL"**.
- **URL Output**: Outputs the URL of the first category of the current post.
- **Easy Integration**: Simple to use with Elementor's dynamic content options.

### Installation
1. Upload the `post_category_dynamic_tag` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use the **"Related Post Category URL"** tag in your Elementor designs.

### Usage
- In Elementor, when editing a post or template, insert the **"Related Post Category URL"** dynamic tag in any widget that supports dynamic content.
- This will output the URL of the first category associated with the post.

### Image Reference

![Related Post](ref_pic/Dynamic_Tag-Post_Category_URL_Pic/related_post.PNG)

![Text Button](ref_pic/Dynamic_Tag-Post_Category_URL_Pic/text_button.PNG)

### Frequently Asked Questions

**Q: What does this plugin do?**  
A: This plugin adds a dynamic tag to Elementor that outputs the URL of the first category of a post.

**Q: How do I use the dynamic tag?**  
A: After activating the plugin, find the **"Related Post Category URL"** tag in Elementor's dynamic content options.

**Q: Is this plugin compatible with all themes?**  
A: The plugin is designed to work with any WordPress theme that supports Elementor.

---

## Plugin-3
Name : Dynamic Tag - Product Category Main Description

Displays the main description of the first product category linked to a product on single product pages in Elementor.

### Description
This plugin adds a dynamic tag to Elementor that allows you to display the main description of the first product category linked to a post. It is particularly useful for WooCommerce sites where product categories have descriptive content that you want to showcase.

### Features
- Adds a dynamic tag to Elementor for displaying product category descriptions.
- Automatically retrieves the main description of the first associated product category.
- Handles cases where no category or description is found.

### Installation
1. Download the plugin files.
2. Upload the `product-category-main-description` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Open Elementor, and you will find the new dynamic tag available under the "Post" category.

### Usage
1. In Elementor, add a text widget where you want the product category description to appear.
2. Click on the dynamic tags icon (the stack icon) next to the text field.
3. Select "Product Category Main Description" from the list of dynamic tags.
4. Save your changes and preview your post to see the product category description.

### Frequently Asked Questions

**Q: What if there is no product category associated with the post?**  
A: The tag will display "No product category found." if no categories are associated.

**Q: What if the category has no description?**  
A: It will show "The selected category has no description." if the category exists but lacks a description.


