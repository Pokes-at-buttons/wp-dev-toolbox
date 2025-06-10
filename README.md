# 🧰 WP Dev Toolbox

A personal collection of reusable code snippets and patterns for working with WordPress — and vanilla PHP too. Designed for day-to-day use, quick reference, and practical reuse.

## 📂 Structure

```
wp-dev-toolbox/
├── ajax/
│   ├── jquery-ajax-example.js         # Classic jQuery AJAX (WP-safe)
│   ├── fetch-then-catch.js            # Modern fetch() pattern
│   ├── fetch-async-await.js           # Modern async/await AJAX
│   ├── ajax-handler.js                # Compact fetch() helper function
│   └── wp-ajax-handler.php            # Server-side PHP handler example (WP)
├── php/
│   ├── wpdb-snippets.php              # WordPress database access with $wpdb
│   ├── mysqli-snippets.php            # Non-WP PHP MySQLi examples
│   └── pdo-snippets.php               # Non-WP PHP PDO examples
├── sql/
│   └── common-sql-snippets.sql        # General SQL patterns (select, join, etc.)
```

## 🚀 How to Use

- These are not production libraries — just practical snippets you can paste or adapt
- All JS examples assume `ajaxurl` or `Localize.ajax_url` has been localized by WordPress
- PHP examples can go in `functions.php`, a plugin, or standalone scripts
- SQL snippets work in phpMyAdmin or CLI

## 🔐 WordPress Compatibility

- Tested in WP 5.5+ through 6.x
- jQuery examples assume WP's built-in jQuery is available
- `fetch()` examples work in all modern browsers (not IE11)

## 📌 Why This Exists

I got tired of rewriting the same AJAX handlers, DB access patterns, and SQL queries in every project, as does every other dev. This is a grab-bag of things I use all the time — now in one place.

Why don't I just use AI? Because I want my brain to remember things and frankly AI auto complete sometimes goes the wrong direction and stamps all over the thought I was just having. Distracting.

Use what’s useful, change what isn’t, and steal shamelessly.