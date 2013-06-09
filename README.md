Create.gitignore
================

Creates a `gitignore.txt` file listing all files currently in localhost website.

For use when developing add-ons, like plugins or themes or modules, for a core PHP application (framework-independent solution)
and you only want to save the add-ons you are developing to your github repository. This process will list every
folder and file within the website and write the list to a `gitignore.txt` file. Simply rename to `.gitignore` to use.

**NOTE** For security purposes, do not use this approach on a production website, only on a localhost site.

##To use:

 1. Install the software you want to use when developing, but that you do not want save to your repository
 into a localhost environment.
 2. Drop the `create.php` file in the root of this website.
 3. Open your browser, and navigate to the file within that site: ex. `http://localhost/site/create.php`
 4. Look for the `.gitignore.txt` file on the root of the localhost website.
 5. Rename `.gitignore.txt` to `.gitignore`
 6. Now, git remote to your repository, create or update your extensions and save only that work to your repository.

##Trouble-shooting:

 If it did not create a gitignore.txt file, check the permissions. You can also create the create.php file using an ID with
 access, then make certain it is enabled for update for everyone. (Again, do not use on a production website.)
