# Asset Directory

Many times, a plugin will need to enqueue various assets including stylesheets and scripts.  Or you may need custom functionality for Customizer.

This directory provides you with an Asset Module.

The base handler file provides you with an enqueuing strategy for handling both CSS and scripts.  It detects if the plugin/system is in development mode. If yes, it enqueues the full version of each file; else, it serves the minified versions found in the `dist` folder.

Customize this enqueuing process to fit your project's needs.
