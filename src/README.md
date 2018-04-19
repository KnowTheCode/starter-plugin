# Source Directory

This directory holds all of the source code for the plugin.

Organize your plugin's source code by it's single purpose, grouping like features and functionality into individual directories.  This architectural structure improves the readability and reusability of your code.

For example, if you need:
 
- For custom post type and taxonomy, place those into a `custom` folder.  
- For metaboxes and settings/options screens, add those into an `admin` folder. 
- For plugin served templates, add a `templates` folder.

Don't forget to separate concerns by keeping the business logic and HTML separate.  Add `views` folder into your file structure to house the HTML view files.
 
How about the root of the directory?

At the root of this directory, you typically place the plugin's main controller.  This controller handles the routing of various tasks.
    