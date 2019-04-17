# This repo is no longer updated!

The code for our current website is developed in another repo, ask Bloemist for access.

# How this repository works

Everytime a commit is pushed to [this repository](https://github.com/0x20/landing), github posts to `https://hackerspace.gent/landing/pull.php` triggering a `git pull` in the `hackerspace.gent/landing` repository.

- `pull.php`: This file calls `git pull` when accessed. This is needed for automatic sync with github, so **do not change it!**

## Handy information:

If you want to commit from the server itself, use this command to specify your name and email address

  git -c user.name='<NAME>' -c user.email='<EMAIL>' commit -m '<TEXT>'


Thanks to: http://writing.markchristian.org/2011/03/10/how-to-deploy-your-code-from-github-automatically.html

# Information about the landing page

- Mostly made by Bloemist
- "Online members" data comes from Pamela: https://hackerspace.gent/wiki/index.php/Pamela
