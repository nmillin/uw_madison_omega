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
Twitter:                nmillin

Informational:  
Documentation:  
Project Page:   
Issue Queue:    
Usage Stats:    
##########################################################################################
##### How To Use the UW Madison Omega Theme -- Walkthrough
##########################################################################################

*******
Please note that this theme hasn't been IE tested yet.  CSS3PIE needs to be added
to the theme (to get gradients & shadows working) and the IE stylesheet needs to be added to.

-update 1/1/2012 -- I have added two skins for blocks.  You can see the screenshot at http://www.flickr.com/photos/55453037@N08/6614486559/in/photostream
*********

Requirements
-Omega base theme (drupal.org/project/omega) installed and enabled
-MegaMenu to use the dropdowns (http://drupal.org/project/megamenu)
      -You will find the css started for using the Nice_menus module and the nice_menus.css.
      In a nice_menu issue (http://drupal.org/node/973500) the maintainer said that they wouldn't add the functionality
      for the bigger dropdown menu as used in the wisc.edu site.  If you want to use
      the nice menu module there is a start for you.  The nav does require MegaMenu to
      have the hover effects & more to work.  

Recommended Modules -- will make your life easier
-Admin Menu (drupal.org/project/admin_menu)
-Module Filter (drupal.org/project/module_filter)

After you have installed the module & themes (Omega & UW_Madison_Omega) the theme will be a little out of wack.
This is because you need to add a menu to the very top of the page or add some extra CSS padding.

-Add a Menu Block to the User Bar Second (make sure the title is set to <none>)
      -you will also have to add the id of the menu to the global style sheet (look for "add user bar menu id" in the global.css)
      /*ex.
      #region-user-second #block-menu-menu-very-top-menu, #region-user-second #block-menu-menu-top-menu  {float:right; padding-bottom:5px; }
      Would be used to add the System Main Menu at the top of the page.  If you don't want any menu here you can add the padding somewhere else   
     */
-Make sure the site slogan is set to what you want
-Add the Search Block to the Branding Region (change permissions to let anonymous users use the search)
-Add MegaMenu Configuration to your Nav Menu
      -Configuration > User Interface > Mega Menus
      -Click the Checkbox of the Menu you want to use
      -You will also have to Configure the Menu you checked (Main Menu)
            -In the "Skin Type" you need to "Use your own custom skin" and it is called "uw-madison"
            ** more info on how I made the Mega Menu http://www.cmsquickstart.com/blog/drupal-theme-design-tutorial-2-mega-menus **
      -Go to Structure > Blocks and you will see a block created by MegaMenu
            -"Megamenu - Main menu" because I checked Main Menu
      -Assign the block to the Menu Region.
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
      have 2 columns, the 600px is too wide.
            -Find the id and add it to the css selector by "smaller dropdown megamenu"
            ex. - each Megamenu parent will have a list-item like
                  <li id="megamenu-mlid-###".....  where the ### are numbers
                  add the #id to the global.css

-add a block to the first footer region to get the background img working (Structure > Blocks)
      -powered by Drupal block
      -Who's online block
      -You will need to add the #id of every block added to the second footer have them float
            to the left & have some padding.  You can't miss the spot at the bottom of global.css     
      -If you have a lot of content in the footer you may need to only have the block floated
            on larger style sheets & not on the mobile one.  Depends on what you want
            the reponsive design to do.
-add a custom block with the copyright links (title = <none>)
      -will center automatically

-resize your browser and see how it will resize to have a responsive look for different
      page widths (mobile phones, tablets, etc)


Future Devolopment for the UW_Madison_Omega Theme:
-Add some CSS to the Content Region (nothing there right now)
      -Create some "skins" for when you create a block you are able to add the #id to
            the css and get the styles from it
      -**update** I have added 2 css skins.  you just need to add the block #id to the
            the global.css.  They are "red ul links widget skin" & "quick facts skin".
            You will find them in the "Content" section of the stylesheet.
-Demo this at a Meetup
-Drink beer

Any thoughts/ideas???