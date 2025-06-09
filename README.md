# 🧰 WP Dev Toolbox

A personal collection of reusable code snippets and patterns for working with WordPress — especially custom plugins and AJAX-heavy admin tools. Shared for reference and reuse, but mostly reuse... get ya own code ya varmint. JK. Use away.

## 📂 Structure

wp-dev-toolbox/
├── ajax/
│   ├── jquery-ajax-example.js         # Classic jQuery AJAX (WP-safe)
│   ├── fetch-then-catch.js            # Modern fetch() pattern
│   ├── fetch-async-await.js           # Modern async/await AJAX
│   ├── ajax-handler.js                # Compact fetch() helper function
│   └── wp-ajax-handler.php            # Server-side PHP handler example


## 🚀 How to Use

- These are not production libraries — just practical snippets you can paste or adapt
- All JS examples assume `ajaxurl` or `Localize.ajax_url` has been localized by WordPress
- PHP examples go in `functions.php` or a plugin

## 🔐 WordPress Compatibility

- Tested in WP 5.5+ through 6.x
- jQuery examples assume WP's built-in jQuery is available
- `fetch()` examples work in all modern browsers (not IE11) but honestly if they're still using Internet Explorer they deserve 90's internet.

## 📌 Why This Exists

I got tired of rewriting the same AJAX handlers and form logic in every project. This repo exists to keep that stuff handy, clean, and DRY.