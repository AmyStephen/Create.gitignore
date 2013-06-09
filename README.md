Create.gitignore
================

Creates a .gitignore file listing all files currently in localhost website.

For use when creating PHP-based add-ons, like plugins or themes when you want to develop within an existing PHP
core code base (doesn't matter which, this is a framework-, cms-independent approach) and you want only the
add-ons you are working to to be committed to repository.

For security purposes, do not use this approach on a production website, only on a localhost site.

 ##To use:

 1. Install the software you want to use (but not save to your repository) into a localhost environment.
 2. Drop the `create.php` file in the root of this website.
 3. Open your browser, and navigate to the file within that site: ex. http://localhost/site/create.php
 4. Look for the `.gitignore.txt` file on the root of the localhost website.
 5. Rename `.gitignore.txt` to `.gitignore`

 ##Trouble-shooting:

 1. Didn't create a file: check your permissions. You can create the create.php file using an ID with
 access, then make certain it is enabled for update for everyone. (Again, do not use on a production website.)
