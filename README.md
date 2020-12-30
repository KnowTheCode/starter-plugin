# Starter Plugin for WordPress

A WordPress plugin boilerplate that emphasizes code quality. 

This boilerplate provides you with a solid foundation to rapidly start your custom plugin development project.  It's fully compliant with PHPCS and WPCS coding standards. It's modular in design. Emphasis is given to SOLID principles.  Validators are built right into the plugin, pre-configured and pre-wired for you to use.

You are free to use this plugin.  Rename it.  Change the namespace and author information.  It's yours to use. 

## Features
 
 ### Smart Architecture
 
 - Provides modular, well-organized architecture to group functionality and features together.
 - No Constants. Eliminates the need for constant definitions. No more polluting the global space. Instead it uses private helper functions.
 - Purposeful, expressive naming strategies to clearly _tell you_ what is happening and why.
 - No prefixes. Prefixes make it harder to read. This plugin uses namespacing instead, providing for better conflict protection and intent expression.
 - Better asset versioning by using each file's modification timestamp instead of hard-coded version numbers.
 
 ### Pre-wired Test Suites
 
 Wiring up test suites can be challenging.  This plugin handles it for you.
 
 - Separation of [Unit and Integration](https://ber.codes/labs/unit-integration-testing-basics/episode-4) testing suites.
 - Bootstrapping for each suite is all done for you.
 - Test cases are built in for you.
 - [Brain Monkey](https://brain-wp.github.io/BrainMonkey/) is built in and ready for you to use.
 - Initial integration tests are provided for the helper functionality in the plugin's bootstrap file.
 - Sample unit test is provided too.
 - Composer scripts are configured (for Mac and Windows), providing a fast, easy shortcut to run each test suite and all of the tests:
    - Run the unit tests via `composer test-unit`.
    - Run the integration tests via `composer test-integration`.
    - Run all of the tests via `composer run-tests`.
 
 Psst, need help getting rolling? Check out this hands-on coding labs:
  
 - [Unit & Integration Testing Basics](https://ber.codes/labs/unit-integration-testing-basics)
 - [Unit Testing with Brain Monkey](https://ber.codes/labs/unit-testing-brain-monkey)
 - [Testing Hooks with Brain Monkey](https://ber.codes/labs/testing-hooks-brain-monkey)
 
 ### Code Validation
 
 Code validators _sniff out_ any compliance issues in your code.  It looks for issues with your code's formatting, naming conventions, security, construction, and more.  This plugin includes:
 
 - PHPCS and WordPress Coding Standard (WPCS) sniffers.
 - Variable analyzer.
 - Pre-configured composer scripts (for Mac and Windows), providing a fast, easy shortcut to run validators on the `src`, tests, or both:
    - Run for just the plugin's code via `composer phpcs-src`.
    - Run for just the tests via `composer phphcs-tests`.
    - Run all of the code via `composer run-phpcs`.

## Getting Started

### Installation

1. Open your favorite command line tool.
2. Navigate to your project's `wp-content/plugins` directory.
3. Clone this repository to your local machine by typing: `git clone https://github.com/KnowTheCode/starter-plugin.git name-of-your-plugin`.
    - Replace `name-of-your-plugin` with the name you are giving to your plugin.
4. Navigate into your new plugin's directory.
5. Install the composer packages by typing: `composer install`.

Bam, you are ready to customize it for your project's needs.

### Rename It

The next step is to rename the namespace, plugin's file header, and the author information.

1. Do a global search and replace in your favorite editor to replace `AmberChunn\GoGoGadget` with your namespace.  Remember, the standard is `YourNameOrCompanyName\PluginName`.
2. Open up the `boostrap.php` file.
3. Change the plugin's file header information for your needs:
    - Change the opening short description.
    - Change the author and author's URI.
    - Change the `Plugin's Name` and `Plugin URI`.
    - Change the `Description`.
    - Change the `Text Domain`.
4. Do a global search and replace to change the `@author` from `amberchunn` to your name.
5. Do a global search and replace to change the `@link` from `https://ber.codes` to your URI.

Bam, you are ready to start building your plugin.
    