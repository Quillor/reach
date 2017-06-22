# reach
EducationNC Reach website 

SAGE STEPS (stable version 8) because the version 9 is still under development if we will use the v9 then we will follow the github steps then it uses yarn:
 - INSTALLATION
  1. Before starting make sure you have composer installed
  2. Open terminal and go/point it to your wordpress directory	
	  - c> cd wamp/www/site/wp-content/themes/ <br />
      - themes> composer create-project roots/sage your-theme-name 8.5.1 (replace your-theme-name with the name of your theme, 8.5.1 is the latest stable version of sage) <br />
	
  3. Installing project dependencies
    * Install the latest Node.js
	* After installing Node.js, we recommend that you update to the latest version of npm and other dependencies.
	   - c> npm install -g npm@latest (global installation)<br />
	   - c> npm install -g gulp bower (Install gulp and Bower globally with npm install -g gulp bower)<br />
	   - your-theme-name> npm install (theme path)<br />
	   - your-theme-name> bower install (theme path)<br />
	   
  4. To add a custom nav. 
    * From your theme folder navigate to lib/setup.php and add your custom navigation below this line (// Register wp_nav_menu() menus).
	* Then to display it add this file on header/footer or any page ( wp_nav_menu(['theme_location' => 'name_navigation', 'menu_class' => 'nav']); ) where as the name_navigation is the name of your custom nav.
    * then go to terminal/cli and from your theme path write this command: your-theme-name> gulp
	* that command means to Compile and optimize the files in your assets directory.
  
  5. To add a custom sidebar.
    * From your theme folder navigate to lib/setup.php and add your custom navigation below this line (Register sidebars).
	* You can just duplicate and rename/duplicate the default sidebars.
	* Then navigate to themes/templates add your new file to display the custom side bar i.e. my-sidebar.php OR
	  You can directly inject the sidebar to any file i.e. footer.php/header.php.
	* then just paste this code ( <?php dynamic_sidebar('your-side-bar-id-name'); ?> )
    * then go to terminal/cli and from your theme path write this command: your-theme-name> gulp
	* that command means to Compile and optimize the files in your assets directory.
	
  6. To add a custom post type.
    * From your theme folder navigate to functions.php and add this value under the $sage_includes "lib/custom-post-types.php"
	  means that all your custom post type code will be coded on that file.
	* Navigate to 'lib/custom-post-types.php' if you don't have that file then please create that file.
	* In this file make sure you call first this code 'namespace Roots\Sage\CPT;' for sage functions.
	* then below that you can now register your new post types, taxonomies, rewrite rules and other functions.
	* I did make a sample so you can just copy and paste it.
	
  7. From here, you can customize your theme.. all of this steps can be found here https://roots.io/sage/docs/theme-installation/
	  

*hint:
 - everytime you add new code/css/style and want to view the result you must call the 'gulp' command in the terminal to compile  your codes.