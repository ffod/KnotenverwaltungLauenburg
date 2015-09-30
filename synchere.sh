#!/bin/bash
rsync -va --progress --cvs-exclude /var/www/vhost_freifunk/codeigniter/ .
