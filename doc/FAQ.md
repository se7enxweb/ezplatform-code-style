# FAQ

## 1. Why didn't you include `.idea` and `nbproject` in your `.gitignore` files?

IDE-specific configuration files are technically not a part of any project. They are a part of
the Developer's environment setup, so they should be ignored system-wide. There are several ways to achieve that with Git's global list
of ignored files. 
See [GitHub help](https://help.github.com/en/articles/ignoring-files#create-a-global-gitignore) for 
more details.  
