##########################################################################################
              _________
|\    |           | ______
| \   |    /\     | |
|  \  |   /  \    | |---
|   \ |  /----\   | |
|    \| /      \  | |_____

##########################################################################################

##########################################################################################
##### UW Madison - Omega Theme
##########################################################################################

Created By:             Nate Millin
Created Date:           12/30/2011
Last Updated:           1/21/2012
Twitter:                nmillin
D.org:                  nmillin

Informational:  
Documentation:  
Project Page:           http://comets.wisc.edu/groups/836/427/uw-drupal-theme
Issue Queue:            Lauren's suggestions have been gone through.
Usage Stats:            Nate (Localhost) & Lauren (dev site)
##########################################################################################
##### How To Use the UW Madison Omega Theme -- Walkthrough
##########################################################################################

*******
Updates
*******
Please note that this theme hasn't been IE tested yet.  CSS3PIE needs to be added
to the theme (to get gradients, rounded corners & shadows working) and the IE stylesheet needs to be added to (probably).

-update 1/1/2012 -- I have added two skins for blocks.  You can see the screenshot at http://www.flickr.com/photos/55453037@N08/6614486559/in/photostream

-update 1/15/2012 -- I have added CSS3 for the background gradients.  Now you don't have to adjust the padding so everything lines up.

-update 1/18/2012 -- Lauren mentioned that it would be nice if the default behavior would be for the menu to be styled like wisc.edu without
      requiring the Mega Menu Module.  I made that the default behavior.  If you want the Mega Menu, just comment out the section of code
      at the bottom of global/menu-zone.css (you can't miss it).
      
-update 1/20/2012 -- Doing some major changes to the css.  Trying to get rid of all the hard-coded #ids in the css.
      This way people can just drop a block (menu or otherwise) in a region (title <none>) and you will be good to go.
              -The MegaMenu still has some hardcoded #ids if you want to override the default behavior and won't be fixed
                   until Menu_Attibutes & MegaMenu can work together.
      -Added accordion menus
      -Added Block Class Module so you can "skin" blocks easier.
      -CSS is divided from global.css depending on zone.
      -Bunch of other stuff too, but nothing exciting.

-update 1/21/2012 -- Added notes in the readme on how to subtheme this module using the Omega Tools Module.
      -Updated the Omega Screenshot for the Theme.  Added the UW Crest where the Omega Logo was.  If someone has better PhotoShop skills they
            could make a sweeter Screenshot.
      -Add CSS for the Breadcrumb & changed the template.php file to change the breadcrumb separator.
      
-update 1/22/2012 -- Added 2 more skins (sidebar-menu & quick-links).  Blocks have 40px; default padding.

-update 2/2/2012 -- Removed all the CSS for the MegaMenu Module.  Started adding the code for using the SuperFish module as the MegaMenu.
      The CSS that was used for the MegaMenu was saved in a new CSS file in Global/.
      -Added the CSS for CSS3PIE.  To have it working you just need to download CSS3PIE to /sites/all/libraries/ & it will work.  (See an example path)
*******
Modules
*******
Required
-Omega base theme (drupal.org/project/omega) installed and enabled

Recommended -- will make your life easier
-Admin Menu (drupal.org/project/admin_menu) - To have a dropdown admin menu, but disable the Toolbar Module if you do this.
-Module Filter (drupal.org/project/module_filter) 
-Menu Attributes (drupal.org/project/menu_attributes) - can add classes to menu items.  This is used to create a menu accordion (see below).
-Block Class (drupal.org/project/block_class) - can add a class to a block.  Used to skin the blocks (see below).
-Superfish - Install/Enable if you want dropdowns or MegaMenus.  (This is currently in development.)
-Omega Tools (for Development) -- Can subtheme Omega fast, and export your theme's updated settings to the .info file.
-Menu Breadcrumb -- Drupal 7 uses the Main Menu to determine the breadcrumbs, but this module allows you to use the menu the current page
      belongs to.  You will have more fine grain control of the breadcrumb settings.

Modules for Production with Omega
-Context -- Allows you to have conditions & reactions to determine block placement & delta (don't have to use the Block interface).
-Delta -- Allows you to save a Omega Zone & Region Configuration and then can set it for different Conditions using the Context Module.


************
Start Readme
************
-Install Omega & the UW_Madison_Omega themes

-Enable and Set UW_Madison_Omega as the default theme

-Add a Menu Block to the User Bar Second (make sure the title is set to <none>)

-Make sure the site slogan is set to what you want (if you want one)

-Add the Search Block to the Branding Region (change permissions to let anonymous users use the search)

-add a block to a region in the footer zone to get the background color working (Structure > Blocks)
      -By default there are 4 regions in the footer zone.  You can remove regions or resize them
              by going into the uw_madison_omega theme settings.
      
-add a custom block with the copyright links (title = <none>) to the footer_postscript region
      -will center automatically

-resize your browser and see how it will resize to have a responsive look for different
      page widths (mobile phones, tablets, etc)

-if you want to have a menu accordion like Vanderbilt does on http://www.vanderbilt.edu/chancellor/
      when you click on NAVIGATE VU, a menu appears above.
      -Install and enable the Menu_Attributes Module
      -Make sure you already have a menu in the upper right corner (we'll call it "Top Right Menu")
      -Create a new menu (I called it "Nate's Accordion Menu", but name it whatever you want) and order the links
              with the links that should go to the right at the top.
      -set title => <none> for both menu blocks
      -add the menu (Nate's Accordion Menu) to one of the 3 accordion regions (I added it to the first accordion region)
      -In the "Top Right Menu" there is a link called "open menu", that when you click on it, the
              menu you placed in the accordion ("Nate's Accordion Menu") will appear
              -This link must go somewhere for accessibility reasons.  If javascript is disabled the Accordion won't work
                   so this could link to wisc.edu, or somewhere.
      -Add a class to the "open menu" link of "accordion-first".  (or "accordion-second" if you placed it in the second accordion region, or "accordion-third"...)
      -Done.
      -Personal Opinion.  This would be a great way of linking back to the wisc.edu site.
              You could have the Main Nav & upper right toolbar menu as accorion menus.

-Skining Blocks - You will need to install/enable the Block Class module.
      -When you edit/create a block you can now add a class to it.  I have created
              4 different skins - "quick-facts", "red-links", "quick-links", & "sidebar-menu" (see http://www.wisc.edu/academics/ for an example)
              -so if you want create a quick-facts block, just add "quick-facts" class (no quotes) in the configure block settings.
              -The CSS for the skins is in content-zone.css.
      -*** If you create more skins let me know so I can add them to the theme. ***

-If you want to Extend this Theme I suggest you Subtheme it.
      -Install and Enable Omega_Tools Module.
      -Go to appearance/omega-tools/add
      -Add name and choose UW Madison Omega.
      -Keep Defaults (install auto, dest all...)
      -Add a Description & a version #
      -Save and then you can enable your theme!

Future Devolopment for the UW_Madison_Omega Theme:
-Add some CSS to the Content Region (nothing there right now)
      -Create more skins for blocks & the content region. 
      -Should the Skins have some default padding???  --**update** .block {margin-top:40px; } was used, but now removed.
      -Should a Sidebar be Yellow?
      -How should the breadcrumbs be styled?  --**used red & grey**
      -Should a Menu in the Sidebar be themed like on http://uc.wisc.edu/brand/templates-and-downloads/web/index-no-top-nav/index.html ?  --**update** added sidebar-menu skin
-Search Block.  Should I try to match wisc.edu exactly or make it better?  Focus/Blur currently.
-Theme the MegaMenu using the SuperFish module.
-Demo this at a Meetup (doing so 2/7/12)
-Drink beer

Any thoughts/ideas???




/**
 * Please don't use this module.  I will be working on adding the SuperFish functionality to the theme.
 * This way you can have a MegaMenu and not have to worry about the module being updated.
 */
//This is down here because it is very long...

-Add MegaMenu Configuration to your Nav Menu(**Optional, only if you want a MegaMenu**)
      -Go to global/menu.css and comment out the default menu css (you will see notes on what to comment out).
      -Go to the Theme settings and uncheck the Main menu.
      -Configuration > User Interface > Mega Menus
      -Click the Checkbox of the Menu you want to use
      -You will also have to Configure the Menu you checked (Main Menu)
            -In the "Skin Type" you need to "Use your own custom skin" and it is called "uw-madison"
            ** more info on how I made the Mega Menu http://www.cmsquickstart.com/blog/drupal-theme-design-tutorial-2-mega-menus **
      -Go to Structure > Blocks and you will see a block created by MegaMenu
            -"Megamenu - Main menu" because I checked Main Menu
      -Assign the block to the Menu Region.
      -Go to the bottom of Global.css and comment out the code for the default menu behavior.
      -Add a bunch of links to the Menu
            ex. Main Menu
              ADMISSIONS
                  Undergraduate
                        Apply
                        Why Wisconsin?
                        Check status
                        Costs and aid
                        Office of Admissions and Recruitment
                  Graduate
                        Steps to apply
                        Programs of study
                        Costs and funding
                        More È
                  Professional schools
                        Law
                        Medicine and Public Health
                        Pharmacy
                        Veterinary Medicine
                  More Admissions È
              RESEARCH
                  Research on campus
                        Centers and programs
                        Facts and figures
                        Libraries
                        Research news
                        Undergraduate research
                  For researchers
                        Funding opportunities
                        Graduate School
                        Grant administration
                        Technology transfer
                  More Research È
                  
        For the example I used the wisc.edu menu structure.  ADMISSIONS & RESEARCH are in the top level
            of the nav and will be on the yellow bar.  The next level (2nd) will contain the columns & will be black.
            The last level (3rd) will have the links in the column and will be red text.  The last 2nd level link 
            will be a more link at the lower right.  http://www.cmsquickstart.com/blog/drupal-theme-design-tutorial-2-mega-menus
            explains this much better than I.
            
      -By default the dropdown hover box will be 600px wide.  For menu items, like RESEARCH, that only
      have 2 columns, the 600px is too wide.  --Future will add code so you can just add a class to the menu item, but right now menu_attributes is not compatable w/ Megamenu.
            -Find the id and add it to the css selector by "smaller dropdown megamenu"
            ex. - each Megamenu parent will have a list-item like
                  <li id="megamenu-mlid-###".....  where the ### are numbers
                  add the #id to the global.css

