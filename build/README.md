# README.md

`build.sh` should help with updating this application.

You will need to provide a SQL dump, with **content only** to migrate over legacy or backup data. This dump cannot be committed to a repository because it might (usually does) contain personal information.

You should run `build.sh` as a user with permissions to write to the web root.

The initial setup should be done with a `git clone...` not with `build.sh` (which wouldn't be present, anyway, right?!)
