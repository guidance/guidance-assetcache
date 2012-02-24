# Guidance Assetcache

A Magento module which adds file mtimes to skin and js URLs to add versioning to files to break through HTTP caching.

## Installation

* Copy files from app folder
* Enable cache type in System > Cache Management

## Overview

The module extends the core behavior for adding skin and js files by appending a new query parameter (v) to the URL with the file mtime.

Ex: http://www.example.com/js/varien.js?v=1256571985

The results of the filemtime are cached using the Magento system cache (lifetime of 24 hours) that can be refreshed from the Admin panel 