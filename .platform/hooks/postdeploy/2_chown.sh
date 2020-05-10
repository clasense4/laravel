#!/bin/sh

# Make Folders Writable

# After the deployment finished, give the full 0777 permissions
# to some folders that should be writable, such as the storage/
# or bootstrap/cache/, for example.

sudo chown webapp:webapp -R storage/
sudo chown webapp:webapp -R bootstrap/cache/